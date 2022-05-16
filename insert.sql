-- Tipo de contacto
INSERT INTO `type_contact_information` (`type_contact_information_id`, `type_contact_information_desc`) VALUES ('1', 'Mail institucional'), ('2', 'Mail Personal'), ('3', 'Teléfono ');

-- Tipo de documento
INSERT INTO `document_type` (`document_type_id`, `document_type_desc`) VALUES ('1', 'Documento Unico de Identidad (DNI)'), ('2', 'CUIL/CUIT'), ('3', 'Pasaporte'), ('4', 'Documento de Identidad Temporario'), ('5', 'Libreta Cívica '), ('6', 'Cédula Mercosur ');

-- Tipo de usuario
INSERT INTO `user_type` (`user_type_id`, `user_type_desc`) VALUES ('1', 'Administrador'), ('2', 'Sección Alumno'), ('3', 'Secretaria Académica'), ('4', 'Coordinador'), ('5', 'Docente Adjunto'), ('6', 'Docente Auxiliar'), ('7', 'Alumno');

-- Genero
INSERT INTO `gender` (`gender_id`, `gender_desc`) VALUES ('1', 'Femenino'), ('2', 'Masculino'), ('3', 'Agénero'), ('4', 'Género fluido'), ('5', 'No binario'), ('6', 'Transgénero'), ('7', 'Transexual'), ('8', 'Prefiero no decirlo');

-- CREANDO EL ADMINISTRADOR
INSERT INTO `contact_information` (`contact_information_id`, `type_contact_information_id`, `contact_information_desc`) VALUES ('1', '1', 'admin@uprosanluis.edu.ar');

-- Documento
INSERT INTO `document` (`document_id`, `document_desc`, `document_type_id`) VALUES ('1', '00000000', '1');

-- Persona
INSERT INTO `person` (`person_id`, `person_names`, `person_lastname`, `person_bith_date`, `contact_information_id`, `document_id`, `gender_id`) VALUES ('1', 'Super', 'Admin', '1988/01/01', '1', '1', '8');

-- Usuario administrador con contraseña: 1234
INSERT INTO `user` (`user_id`, `user_username`, `user_password`, `user_token`, `user_type_id`, `person_id`) VALUES ('1', 'uproadmin', '$2y$12$euYW7TtkHK6.ksufldeGrOy9cSmZ0spx3SmLhxlsa6MMUTmx2ublq', '$2y$12$euYW7TtkHK6.ksufldeGrOy9cSmZ0spx3SmLhxlsa6MMUTmx2ublq', '1', '1');

-- OPTION DEFAULT
INSERT INTO `options` (`options_id`, `options_desc`, `options_icon`) VALUES ('1', 'Inicio', 'home'), ('2', 'Alumnos', 'person'), ('3', 'Docentes', 'record_voice_over'), ('4', 'Coordinadores', 'supervisor_account'), ('5', 'Actividades', 'book'), ('6', 'Carreras', 'school'), ('7', 'Estadísticas', 'stacked_bar_chart'), ('10', 'Configuración', 'settings');

-- ACCTION DEFAULT
INSERT INTO `actions` (`actions_id`, `actions_desc`, `actions_url`, `options_id`) VALUES ('1', 'Inscribir', 'students/enroll', '2'), ('3', 'Cambiar propuesta', 'students/change_proposal', '2'), ('2', 'Asistencias', 'students/attendance', '2'), ('4', 'Dar de baja', 'students/unsubscribe', '2'), ('5', 'Generar certificado', 'students/generate_certificate', '2');
INSERT INTO `actions` (`actions_id`, `actions_desc`, `actions_url`, `options_id`) VALUES ('6', 'General', 'settings/general', '10'), ('7', 'Cuenta', 'settings/account', '10'), ('8', 'Accesibilidad', 'settings/accessibility', '10'), ('9', 'Apariencia', 'settings/appearance', '10');

-- PERMISSION DEFAULT
INSERT INTO `user_has_options` (`user_id`, `options_id`, `status`) VALUES ('1', '1', '1'), ('1', '2', '1'), ('1', '3', '1'), ('1', '4', '1'), ('1', '5', '1'), ('1', '6', '1'), ('1', '7', '1'), ('1', '10', '1');
INSERT INTO `user_has_actions` (`user_id`, `actions_id`, `status`) VALUES ('1', '1', '1'), ('1', '2', '1'), ('1', '3', '1'), ('1', '4', '1'), ('1', '5', '1'), ('1', '6', '1'), ('1', '7', '1'), ('1', '8', '1'), ('1', '9', '1');