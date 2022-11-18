<?php

namespace Application\Form;

use Laminas\Db\Sql\Where;
use Laminas\Db\TableGateway\TableGateway;

class FormFieldTableGateway extends TableGateway
{
    public function getFormFields(FormEntity $form, bool $formatForPublicApi = false): array
    {
        $where = new Where();
        $where->equalTo('form_id', $form->getId());

        return $formatForPublicApi
            ? $this->prepareDataForPublicApi($this->select($where)->toArray())
            : $this->select($where)->toArray();
    }

    private function prepareDataForPublicApi(array $allData): array
    {
        $hiddenFields = ['form_id'];

        $apiData = [];
        foreach ($allData as $data) {
            $encodedData = [];

            foreach(array_keys($data) as $fieldKey) {
                if (in_array($fieldKey, $hiddenFields)) {
                    unset($data[$fieldKey]);
                } else {
                    $encodedData[$fieldKey] = $data[$fieldKey];
                }
            }

            $encodedData['field_width'] = json_decode($encodedData['field_width']);
            $apiData[] = $encodedData;
        }

        return $apiData;
    }
}
