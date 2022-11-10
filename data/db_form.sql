--
-- Form
--
CREATE TABLE `core_form`
(
    `id`         int(11) NOT NULL,
    `form_key`   varchar(50)  NOT NULL,
    `form_title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `core_form`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `core_form`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT;

--
-- Form Fields
--
CREATE TABLE `core_form_field`
(
    `id`                  int(11) NOT NULL,
    `form_id`             int(11) NOT NULL,
    `field_key`           varchar(50)  NOT NULL,
    `field_label`         varchar(100) NOT NULL,
    `field_type`          varchar(20)  NOT NULL,
    `field_default_value` varchar(100) DEFAULT NULL,
    `list_column`         varchar(50)  DEFAULT NULL,
    `list_label`          varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

ALTER TABLE `core_form_field`
    ADD PRIMARY KEY (`id`);

ALTER TABLE `core_form_field`
    MODIFY `id` int (11) NOT NULL AUTO_INCREMENT;
