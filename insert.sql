-- Tipo de contacto
INSERT INTO `type_contact_information` (`type_contact_information_id`, `type_contact_information_desc`) VALUES ('1', 'Mail institucional'), ('2', 'Mail Personal'), ('3', 'Teléfono ');

-- Tipo de documento
INSERT INTO `document_type` (`document_type_id`, `document_type_desc`) VALUES ('1', 'Documento Unico de Identidad (DNI)'), ('2', 'CUIL/CUIT'), ('3', 'Pasaporte'), ('4', 'Documento de Identidad Temporario'), ('5', 'Libreta Cívica '), ('6', 'Cédula Mercosur ');

-- Tipo de usuario
INSERT INTO `user_type` (`user_type_id`, `user_type_desc`) VALUES ('1', 'Administrador'), ('2', 'Sección Alumno'), ('3', 'Secretaria Académica'), ('4', 'Coordinador'), ('5', 'Docente Adjunto'), ('6', 'Docente Auxiliar'), ('7', 'Alumno');

-- Usuario administrador con contraseña: admin pass
INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_token`, `user_type_id`) VALUES ('1', 'administrador@uprosanluis.edu.ar', '$2y$12$6NMLa2GH86szgVeSAib0uuj0wcSQSyHp8CVX2UkXaN4YTsLZI7rPO\r\n', '$2y$12$6NMLa2GH86szgVeSAib0uuj0wcSQSyHp8CVX2UkXaN4YTsLZI7rPO\r\n', '1');