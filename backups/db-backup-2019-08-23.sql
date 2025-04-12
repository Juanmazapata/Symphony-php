

CREATE TABLE `empleado` (
  `id` int(10) NOT NULL,
  `cod_empleado` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombres` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipodocumento` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `doc_identidad` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `eps` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pensiones` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `arl` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `pais` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `departamento` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir_barrio` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estudio` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `titulo` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `universidad` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anioinicio` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anioretiro` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipocontrato` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tiempocontrato` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `salario` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pin` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `privilegio_admin` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `fotcedula` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotlibretamilitar` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foteps` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotpensiones` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotarl` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotrut` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotcontraloria` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotprocuraduria` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotantecedentes` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fotctabancaria` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fothdvida` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO empleado VALUES("1","CEM-9372","WILLYAM FERNANDO","CANO VEL&AACUTE;SQUEZ","Hombre","C.C.","71495732","SAVIA","COLPENSIONES","SEGUROS BOLIVAR","33","1985-04-10","Colombia","Antioquia","Betulia","8446677","3117165066","w_i_chy@hotmail.com","SECTOR LA CECILA RESTREPO","diptectecnologia","TECNOLOGO EN SISTEMAS DE INFORMACION","TECNOLOGICO DE ANTIOQUIA","MONITOR DE CUERDA","2018","2020","DEFINIDO","2 A&Ntilde;OS","MINIMO","$2y$10$BEpBY4vJQBxMZemc9jFEweJ3p8gge.EGtnzTkDHwXoswisty8maH2","foto_CEM-9372.png","Si","Habilitado","fot_cedula_CEM-9372.pdf","fot_LM_CEM-9372.pdf","fot_EPS_CEM-9372.pdf","fot_pension_CEM-9372.pdf","fot_ARL_CEM-9372.pdf","fot_RUT_CEM-9372.pdf","fot_contraloria_CEM-9372.pdf","fot_procuraduria_CEM-9372.pdf","fot_AJ_CEM-9372.pdf","fot_CB_CEM-9372.pdf","fot_HV_CEM-9372.pdf","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("2","CEM-5972","JUAN MANUEL","ZAPATA CANO","Hombre","C.C.","1038769455","MEDIMAS","","","26","1992-10-16","Colombia","Antioquia","Concordia","","3116424646","juanzaca099@gmail.com","EL PUENTE","diptectecnologia","T&Eacute;CNICO EN DISE&Ntilde;O DE P&Aacute;GINAS WEB","POLIT&Eacute;CNICO JAIME ISAZA CADAVID","ADMINISTRADOR REDES SOCIALES Y MEDIOS AUDIOVISUALES","2018","2020","PRESTACI&Oacute;N DE SERVICIOS","10 MESES","$420.000","$2y$10$F66MOAe.QvbiLlvkCeS0JeguBjdJui/oMk.zOKkCI6/ySy2GksN/e","foto_CEM-5972.png","Si","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-6474","ANA MILENA","ESCOBAR &AACUTE;LVAREZ","Mujer","C.E.","1038768439","NUEVA EPS","PORVENIR","SURA","28","1990-06-23","Colombia","Antioquia","Concordia","","3137875545","anitaescobar23@hotmail.com","LA AMEL&Iacute;","profesional","INGENIERA DE PRODUCTIVIDAD Y CALIDAD","POLIT&Eacute;CNICO JAIME ISAZA CADAVID","COORDINADOR ADMINISTRATIVO Y DE GESTI&Oacute;N","2018","2020","PRESTACI&Oacute;N DE SERVICIOS","1 A&Ntilde;O","$1\\\'200.000","$2y$10$ziNurlugrMJBQFNf8veN/ensrQTg4XWoZ.LtsnzmKmpf8Dk4gWN36","cortina-symphony.jpg","Si","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-1618","YEISON FERNEY","BEDOYA &AACUTE;LVAREZ","Hombre","C.E.","71494324","NUEVA EPS","PROTECCI&Oacute;N","POSITIVA","40","1979-03-20","Colombia","Antioquia","Fedonia","","3116181369","yeisonbedoya79@gmail.com","","profesional","Maestr&iacute;a en M&uacute;sica","EAFIT","Director Art&iacute;stico","2007","2020","Indefinido","20","1\\\'300.000","$2y$10$yvtMHJh3KrhRqXUn9NJWe.YcrolUGkVqrHWyHomn3Wax8c/SyaUoi","cortina-symphony.jpg","Si","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-2659","JUAN DAVID ","CAMPILLO ZAPATA","Hombre","C.E.","71495425","NUEVA EPS","","","","1982-12-11","Colombia","Antioquia","Concordia","","","daviszapatin007@hotmail.com","","ninguna","","","Director Banda","","","INDEFINIDO","20","2\\\'000.000","$2y$10$3/SJ0oPfhNROP1UNboIlrO5f0yZN2AIYsidsUXKsuR3U1KWuPHj36","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-4423","CARLOS ARTURO","AGUDELO ARREDONDO","Hombre","C.E.","1038769987","NUEVA EPS","","","25","1993-10-13","Colombia","Antioquia","Concordia","","","carlosarturoagudeloarredondo@gmail.com","","ninguna","","","MONITOR BANDA/PIANO","","","PRESTACI&Oacute;N DE SERVICIOS","1","7\\\'000.000","$2y$10$Ly3SJH18yW/Fb6iOQZKZdeAxBbL61KaeeDhNhoe54uJMsuwSPyRoq","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-7725","DIEGO ALEJANDRO","CANO URREGO","Hombre","C.E.","1038770918","SAVIA SALUD EPS","","","22","1996-09-26","Colombia","Antioquia","Concordia","","","daniandiego@gmail.com","","ninguna","","","MONITOR CUERDAS","","","PRESTACI&Oacute;N DE SERVICIOS","1","500.000","$2y$10$YomnRGdVW3Wx.RW1RQ/A4eohhEfBstdBpfdk8XWLzLkZ.kIah9Jwy","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-4654","GIOVANNI ANDR&EACUTE;S","LOAIZA QUIROZ","Hombre","C.E.","15459626","NUEVA EPS","","","","1984-02-18","Colombia","Antioquia","Titirib&iacute;","","","giovanniandresloaiza@gmail.com","","ninguna","","","DIRECTOR DE CUERDAS","","","INDEFINIDO","20","1\\\'300.000","$2y$10$W9yXxc3HvAGhBWY87G.hNOHMqZ67HlcHdqcILFOywtCrAwC2fnPzy","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-2424","JUAN DIEGO","QUINTERO ZAPATA","Hombre","C.E.","71493251","","","","","1975-02-04","Colombia","Antioquia","Concordia","","","bembacolor@hotmail.com","","ninguna","","","DIRECTOR DE DANZAS","","","INDEFINIDO","20","1\\\'300.000","$2y$10$exwxXmlThf5FTxoxJVjUFez3qOyJbUvZILIXOfL0nT1fvW0IDafJi","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-7213","LUZ MARIELA","CALLE BEDOYA","Mujer","C.E.","43846173","NUEVA EPS","","","","1985-03-31","Colombia","Antioquia","Concordia","","","marydanza27@hotmail.com","","ninguna","","","MONITOR DANZAS","","","PRESTACI&Oacute;N DE SERVICIOS","1","800.000","$2y$10$sz5XclrV7UFRdhnESEPZKuHTKo8dp6FE2osj90jfjX7Q5HDJX6qly","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-9940","MARIO ALONSO","CASTA&NTILDE;EDA ARENAS","Hombre","C.E.","71495823","NUEVA EPS","","","","1984-09-13","Colombia","Antioquia","Concordia","","","mariodanze@hotmail.com","","ninguna","","","MONITOR DE TEATRO","","","PRESTACI&Oacute;N DE SERVICIOS","1","800.000","$2y$10$KkqeMVH9TEGLiFfWrQdq.esjZEsLfeiXdLnvSOvhpPATsU6R13l7O","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-4067","JHON ALEJANDRO","ZAPATA CANO","Hombre","C.E.","1038767165","NUEVA EPS","","","","1987-12-29","Colombia","Antioquia","Caldas","","","jazdrums@hotmail.com","","ninguna","","","MONITOR PERCUSI&Oacute;N","","","PRESTACI&Oacute;N DE SERVICIOS","1","500.000","$2y$10$8Fx1tNgHfE/NHyLlZbaSVeNlSY6rOmCVsmrH3Be3q1YIkQbUniu8.","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-9771","NUEVO","USUARIO","","","","","","","","","","","","","","vale.roman9@gmail.com","","","","","","","","","","","$2y$10$hpludofnP5cCz8sTnqJ/HebngaOhvASNBWSAdEdPDabpsPFwDCVfC","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-9085","NUEVO","USUARIO","","","","","","","","","","","","","","vale.roman9@gmail.com","","","","","","","","","","","$2y$10$JBwf7Lc4.UqjsP5NMlHzIubJKN1/r7Mx7Y9TDu.dOFoAF6zPNfJRO","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-9316","NUEVO","USUARIO","","","","","","","","","","","","","","vale.roman9@gmail.com","","","","","","","","","","","$2y$10$pkoajhDq6qPRc1WX8peoQeqOaf3bPYOVHEFkvfGMI2nqsd/sbO1tq","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-5766","NUEVO","USUARIO","","","","","","","","","","","","","","vale.roman9@gmail.com","","","","","","","","","","","$2y$10$Wvc6pE5jxX/iLdF.iqtE8OUE2u29EQeOVEy/UYKPcmKBeedFl1IP.","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-8335","NUEVO","USUARIO","","","","","","","","","","","","","","vale.roman9@gmail.com","","","","","","","","","","","$2y$10$qBYpsEzMhvv3no9abZvff.2NWHi.zq.UGKh3oSzL0gGbRsEKtEoUC","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-1431","NUEVO","USUARIO","","","","","","","","","","","","","","vale.roman9@gmail.com","","","","","","","","","","","$2y$10$y8aLRCpqOik0j84ge.HkcuHFvSr681FGo4TsghvrFlYyhSMLGE2HS","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-7783","NUEVO","USUARIO","","","","","","","","","","","","","","vale.roman9@gmail.com","","","","","","","","","","","$2y$10$9n.tP8IE/6eS1mzDm6HC5.yj.3XroLeBJkKV1ygZOnnyzVJayDT5O","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO empleado VALUES("0","CEM-8337","VALERIA","ROM&AACUTE;N PARRA","Mujer","C.E.","1038771146","SURA","","","","1997-06-25","Colombia","Antioquia","Medell&iacute;n","","","vale.roman9@gmail.com","","profesional","ABOGADA","UNISABANETA","MONITOR CUERDAS FROTADAS","2018","2020","PRESTACI&Oacute;N DE SERVICIOS","1","400.000","$2y$10$UCEJjeO9t2isdFf.uC4v8e21Bb1aq29siApxVuLESt3NxZD1trsju","cortina-symphony.jpg","No","Habilitado","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","sin anexar","0000-00-00 00:00:00","0000-00-00 00:00:00");





CREATE TABLE `informe` (
  `id` int(10) NOT NULL,
  `usuario` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `programa` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `mes` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anio` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `actividad` longtext COLLATE utf8_spanish_ci,
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;






CREATE TABLE `institucion` (
  `id` int(10) NOT NULL,
  `nom_institucion` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nit` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `direccion` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fax` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `correo` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `web` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `director` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `logotipo_institucion` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO institucion VALUES("1","-","","","","","","","","","","");





CREATE TABLE `matricula` (
  `id` int(10) NOT NULL,
  `nro_matricula` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombres` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sexo` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_documento` varchar(5) COLLATE utf8_spanish_ci DEFAULT NULL,
  `doc_identidad` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `edad` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_nacimiento` date DEFAULT NULL,
  `eps` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `pais` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `departamento` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `ciudad` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `telefono` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `celular` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `zona` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `dir_barrio` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `institucion_educativa` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `sede` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `grado` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `anio_ingreso` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nombres_acudiente` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `apellidos_acudiente` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `doc_identidad_acudiente` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `parentesco` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tel_acudiente` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cel_acudiente` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `email_acudiente` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_sangre` varchar(3) COLLATE utf8_spanish_ci DEFAULT NULL,
  `enfermedad` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_enfermedad` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `medicamento` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_medicamento` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `alergia` varchar(10) COLLATE utf8_spanish_ci DEFAULT NULL,
  `tipo_alergia` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `programa1` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nivel_pro1` int(2) DEFAULT NULL,
  `director1` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `instrumento1` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `programa2` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nivel_pro2` int(2) DEFAULT NULL,
  `director2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `instrumento2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `programa3` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nivel_pro3` int(2) DEFAULT NULL,
  `director3` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `instrumento3` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `recauda_cuota` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `foto` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fot_docident` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fot_eps` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `estado` varchar(15) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_elaboro` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_actualizo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;






CREATE TABLE `programa` (
  `id` int(10) NOT NULL,
  `nom_programa` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `descripcion` varchar(250) COLLATE utf8_spanish_ci DEFAULT NULL,
  `niveles` int(2) DEFAULT NULL,
  `dias_realizo` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `h_inicio_M` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `h_finalizacion_M` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `h_inicio_T` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `h_finalizacion_T` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `h_inicio_N` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `h_finalizacion_N` varchar(20) COLLATE utf8_spanish_ci DEFAULT NULL,
  `director` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `monitor1` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo1` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `monitor2` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo2` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `monitor3` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo3` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `monitor4` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo4` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `monitor5` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `cargo5` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `repertorio` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL,
  `logotipo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_elaboro` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `usuario_actualizo` varchar(100) COLLATE utf8_spanish_ci DEFAULT NULL,
  `f_registro` datetime DEFAULT NULL,
  `f_actualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

INSERT INTO programa VALUES("0","CUERDAS PULSADAS","","","","","","","","","","GIOVANNI ANDR&amp;EACUTE;S LOAIZA QUIROZ","DIEGO ALEJANDRO CANO URREGO","MONITOR","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Repertorio","logotipo-programa.png","","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO programa VALUES("0","DANZAS","","","","","","","","","","JUAN DIEGO QUINTERO ZAPATA","LUZ MARIELA CALLE BEDOYA","MONITOR","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Repertorio","logotipo-programa.png","","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO programa VALUES("0","BANDA DE M&Uacute;SICA","","","","","","","","","","JUAN DAVID  CAMPILLO ZAPATA","CARLOS ARTURO AGUDELO ARREDONDO","MONITOR BRONCES","JHON ALEJANDRO ZAPATA CANO","MONITOR PERCUSI&Oacute;N","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Repertorio","logotipo-programa.png","","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO programa VALUES("0","CUERDAS FROTADAS","","","","","","","","","","YEISON FERNEY BEDOYA &amp;AACUTE;LVAREZ","VALERIA ROM&amp;AACUTE;N PARRA","MONITOR","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Repertorio","logotipo-programa.png","","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO programa VALUES("0","CUERDAS FROTADAS","","","","","","","","","","YEISON FERNEY BEDOYA &amp;AACUTE;LVAREZ","VALERIA ROM&amp;AACUTE;N PARRA","MONITOR","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Repertorio","logotipo-programa.png","","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO programa VALUES("0","PIANO","","","","","","","","","","YEISON FERNEY BEDOYA &amp;AACUTE;LVAREZ","CARLOS ARTURO AGUDELO ARREDONDO","MONITOR","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Repertorio","logotipo-programa.png","","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO programa VALUES("0","TEATRO","","","","","","","","","","YEISON FERNEY BEDOYA &amp;AACUTE;LVAREZ","MARIO ALONSO CASTA&amp;NTILDE;EDA ARENAS","MONITOR","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Repertorio","logotipo-programa.png","","","0000-00-00 00:00:00","0000-00-00 00:00:00");
INSERT INTO programa VALUES("0","PERCUSI&Oacute;N","","","","","","","","","","JHON ALEJANDRO ZAPATA CANO","JHON ALEJANDRO ZAPATA CANO","MONITOR","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Monitor","","Seleccionar Repertorio","logotipo-programa.png","","","0000-00-00 00:00:00","0000-00-00 00:00:00");





CREATE TABLE `repertorio_banda` (
  `id` int(10) NOT NULL,
  `cod_obra` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `nom_obra` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `compositor` varchar(150) COLLATE utf8_spanish_ci DEFAULT NULL,
  `genero` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `num_carpeta` varchar(50) COLLATE utf8_spanish_ci DEFAULT NULL,
  `fecha_ultima_presentacion` date DEFAULT NULL,
  `fecha_registro` datetime DEFAULT NULL,
  `fecha_actualizacion` datetime DEFAULT NULL,
  `usuario` varchar(200) COLLATE utf8_spanish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;




