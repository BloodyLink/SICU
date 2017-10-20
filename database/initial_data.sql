INSERT INTO usuario (usuario, password) VALUES ('admin', 'e10adc3949ba59abbe56e057f20f883e');
INSERT INTO estado (nombre) VALUES ('Pendiente'), ('Comprado'), ('Entregado');


-- Regiones;
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (1, 'I Región', 'de Tarapacá', 2);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (2, 'II Región', 'de Antofagasta', 3);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (3, 'III Región', 'de Atacama', 4);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (4, 'IV Región', 'de Coquimbo', 5);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (5, 'V Región', 'de Valparaíso', 6);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (6, 'VI Región', 'del Libertador General Bernardo OHiggins', 8);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (7, 'VII Región', 'del Maule', 9);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (8, 'VIII Región', 'del Bío Bío', 10);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (9, 'IX Región', 'de La Araucanía', 11);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (10, 'X Región', 'de Los Lagos', 14);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (11, 'XI Región', 'de Aysén del General Carlos Ibáñez del Campo', 15);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (12, 'XII Región', 'de Magallanes y la Antartica Chilena', 15);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (13, 'Región Metropolitana', 'Metropolitana', 7);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (14, 'XIV Región', 'de Los Ríos', 13);
INSERT INTO regiones (region_id, region_numero, region_descripcion, region_orden) VALUES (15, 'XV Región', 'de Arica y Parinacota', 1);




-- Llenado provincias
-- I Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (1, 'Iquique', 1);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (2, 'Tamarugal', 1);
-- II Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (3, 'Tocopilla', 2);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (4, 'El Loa', 2);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (5, 'Antofagasta', 2);
-- III Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (6, 'Chañaral', 3);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (7, 'Copiapó', 3);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (8, 'Huasco', 3);
-- IV Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (9, 'Elqui', 4);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (10, 'Choapa', 4);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (11, 'Limarí', 4);
-- V Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (12, 'Valparaíso', 5);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (13, 'Isla de Pascua', 5);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (14, 'Los Andes', 5);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (15, 'Petorca', 5);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (16, 'Quillota', 5);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (17, 'San Felipe de Aconcagua', 5);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (18, 'San Antonio', 5);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (19, 'Marga Marga', 5);
-- VI Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (20, 'Cachapoal', 6);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (21, 'Cardenal Caro', 6);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (22, 'Colchagua', 6);
-- VII Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (23, 'Talca', 7);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (24, 'Cauquenes', 7);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (25, 'Curicó', 7);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (26, 'Linares', 7);
-- VIII Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (27, 'Concepción', 8);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (28, 'Arauco', 8);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (29, 'Bío Bío', 8);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (30, 'Ñuble', 8);
-- IX Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (31, 'Cautín', 9);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (32, 'Malleco', 9);
-- X Regionx
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (33, 'Llanquihue', 10);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (34, 'Chiloé', 10);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (35, 'Osorno', 10);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (36, 'Palena', 10);
-- XI Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (37, 'Coihaique', 11);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (38, 'Aysen', 11);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (39, 'Capitán Prat', 11);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (40, 'General Carrera', 11);
-- XII Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (41, 'Magallanes', 12);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (42, 'Antártica Chilena', 12);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (43, 'Tierra del Fuego', 12);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (44, 'Ultima Esperanza', 12);
-- XIII Region (Metropolitana)
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (45, 'Santiago', 13);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (46, 'Cordillera', 13);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (47, 'Chacabuco', 13);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (48, 'Maipo', 13);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (49, 'Melipilla', 13);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (50, 'Talagante', 13);
-- XIV Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (51, 'Valdivia', 14);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (52, 'Ranco', 14);
-- XV Region
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (53, 'Arica', 15);
INSERT INTO provincias (provincia_id, provincia_nombre,  region_id) VALUES (54, 'Parinacota', 15);



-- COMUNAS
-- ============================================================================

-- I - REGION TARAPACA
-- Prov. Iquique
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Iquique',1,2,1201);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Alto Hospicio',1,347,1211);
-- Prov. Tamarugal
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pica',2,4,1203);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pozo Almonte',2,5,1204);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Huara',2,3,1206);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Camiña',2,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Colchane',2,297,1210);
-- II - REGION ANTOFAGASTA
-- Prov. Antofagasta
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Antofagasta',3,7,2201);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Mejillones',3,8,2203);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Sierra Gorda',3,299,2206);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Taltal',3,9,2202);
-- Prov. El Loa
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Calama',4,10,2301);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Ollague',4,300,2302);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Pedro de Atacama',4,0,0);
-- Prov. Tocopilla
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Tocopilla',2,6,2101);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('María Elena',2,0,0);
-- III - REGION ATACAMA
-- Prov. Copiapó
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Copiapó',6,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Caldera',6,14,3202);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Tierra Amarilla',6,15,3203);
-- Prov. Chanaral
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Chañaral',7,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Diego de Almagro',7,12,3102);
-- Prov. Huasco
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Vallenar',8,16,3301);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Freirina',8,17,3302);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Huasco',8,18,3303);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Alto del Carmen',8,302,3304);
-- IV - REGION COQUIMBO
-- Prov. Elqui
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('La Serena',9,19,4101);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('La Higuera',9,20,4102);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Coquimbo',9,21,4103);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Andacollo',9,22,4104);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Vicuña',9,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Paihuano',9,24,4106);
-- Prov. Choapa
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Illapel',10,30,4301);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Salamanca',10,32,4302);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Los Vilos',10,33,4303);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Canela',10,31,4304);
-- Prov. Limari
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Ovalle',11,25,4201);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Río Hurtado',11,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Monte Patria',11,26,4203);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Combarbalá',11,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Punitaqui',11,27,4204);
-- Prov. Valparaiso
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Valparaíso',12,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Casablanca',12,40,5305);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Concon',12,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Juan Fernández',12,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Puchuncaví',12,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quintero',12,35,5306);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Viña del Mar',12,0,0);
-- Prov. Isla de Pascua
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Isla de Pascua',13,41,5101);
-- Prov.  Los Andes
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Los Andes',14,66,5701);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Esteban',14,69,5703);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Calle Larga',14,67,5702);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Rinconada',14,68,5704);
-- Prov.  Petorca
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Petorca',15,55,5202);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('La Ligua',15,59,5201);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cabildo',15,56,5203);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Papudo',15,57,5205);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Zapallar',15,58,5204);
-- Prov. Quillota
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quillota',16,48,5501);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('La Calera',16,50,5504);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Hijuelas',16,51,5503);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('La Cruz',16,49,5505);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Nogales',16,52,5502);
-- Prov. San Felipe de Aconcagua
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Felipe',17,60,5601);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Catemu',17,63,5603);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Llay Llay',17,65,5606);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Panquehue',17,62,5602);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Putaendo',17,61,5604);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Santa María',17,0,0);
-- Prov. San Antonio
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Antonio',18,42,5401);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Algarrobo',18,44,5406);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cartagena',18,46,5403);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('El Quisco',18,45,5405);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('El Tabo',18,47,5404);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Santo Domingo',18,43,5402);
-- Prov.  Marga Marga
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quilpué',19,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Villa Alemana',19,39,5303);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Limache',19,53,5506);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Olmué',19,0,0);
-- VI - REGION DEL LIBERTADOR  GNAL: BERNARDO O'HIGGINS
-- Prov. Cachapoal
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Rancagua',20,105,6101);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Codegua',20,110,6107);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Coinco',20,114,6116);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Coltauco',20,113,6106);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Doñihue',20,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Graneros',20,107,6103);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Las Cabras',20,116,6109);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Machalí',20,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Malloa',20,122,6115);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Mostazal',20,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Olivar',20,120,6114);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Peumo',20,115,6108);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pichidegua',20,118,6111);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quinta de Tilcoco',20,123,6117);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Rengo',20,121,6112);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Requinoa',20,119,6113);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Vicente',20,117,6110);
-- Prov. Cardenal Caro
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pichilemu',21,137,6301);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('La Estrella',21,139,6304);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Litueche',21,136,6303);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Marchigue',21,134,6305);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Navidad',21,138,6302);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Paredones',21,133,6306);
-- Prov. Colchagua
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Fernando',22,124,6201);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Chépica',22,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Chimbarongo',22,125,6202);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lolol',22,129,6206);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Nancagua',22,126,6203);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Palmilla',22,130,6207);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Peralillo',22,131,6208);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Placilla',22,127,6204);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pumanque',22,135,6214);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Santa Cruz',22,128,6205);
-- VII - REGION DEL MAULE
-- Prov. Talca
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Talca',23,150,7201);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Constitución',23,157,7208);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Curepto',23,155,7207);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Empedrado',23,158,7209);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Maule',23,154,7206);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pelarco',23,152,7203);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pencahue',23,153,7205);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Río Claro',23,149,7204);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Clemente',23,151,7202);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Rafael',23,341,7210);
-- Prov. Cauquenes
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cauquenes',24,166,7401);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pelluhue',24,320,7402);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Chanco',24,167,7403);
-- Prov. Curico
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Curicó',25,140,7101);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Hualañé',25,144,7107);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Licantén',25,145,7105);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Molina',25,147,7108);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Rauco',25,143,7104);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Romeral',25,141,7103);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Sagrada Familia',25,148,7109);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Teno',25,142,7102);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Vichuquén',25,146,7106);
-- Prov. Linares
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Linares',26,159,7301);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Colbún',26,161,7303);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Longaví',26,162,7304);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Parral',26,164,7305);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Retiro',26,165,7306);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Javier',26,156,7310);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Villa Alegre',26,163,7309);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Yerbas Buenas',26,160,7302);
-- VIII - REGION DEL BIOBIO
-- Prov. Concepcion
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Concepción',27,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Coronel',27,194,8207);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Chiguayante',27,344,8211);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Florida',27,193,8204);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Hualqui',27,192,8203);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lota',27,195,8208);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Penco',27,191,8202);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Pedro de la Paz',27,343,8210);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Santa Juana',27,196,8209);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Talcahuano',27,189,8206);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Tomé',27,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Hualpén',27,0,0);
-- Prov Arauco
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Arauco',28,198,8301);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lebu',28,199,8303);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cañete',28,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Contulmo',28,202,8306);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Curanilahue',28,197,8302);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Tirua',28,203,8307);
-- Prov Bio Bio
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Los Angeles',29,204,8401);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Antuco',29,303,8413);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cabrero',29,208,8410);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Laja',29,210,8403);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Mulchén',29,214,8407);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Nacimiento',29,212,8405);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Negrete',29,213,8406);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quilaco',29,215,8408);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quilleco',29,206,8404);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Rosendo',29,211,8411);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Santa Bárbara',29,205,8402);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Tucapel',29,209,8412);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Yumbel',29,207,8409);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Alto Bio Bio',29,349,8414);
-- Prov Nuble
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Chillán',30,168,8101);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Bulnes',30,180,8113);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cobquecura',30,175,8107);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Coelemu',30,186,8120);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Coihueco',30,170,8103);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Chillan Viejo',30,342,8121);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('El Carmen',30,185,8118);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Ninhue',30,174,8105);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Ñiquén',30,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pemuco',30,184,8117);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pinto',30,169,8102);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Portezuelo',30,171,8106);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quillón',30,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quirihue',30,172,8104);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Ranquil',30,187,8119);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Carlos',30,176,8109);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Fabián',30,178,8111);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Ignacio',30,181,8114);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Nicolás',30,179,8112);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Trehuaco',30,173,8108);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Yungay',30,183,8116);
-- IX - REGION DE LA ARAUCANIA
-- Prov. Cautin
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Temuco',31,227,9201);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Carahue',31,235,9209);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cunco',31,230,9204);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Curarrehue',31,305,9218);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Freire',31,229,9203);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Galvarino',31,232,9207);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Gorbea',31,238,9212);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lautaro',31,231,9205);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Loncoche',31,240,9214);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Melipeuco',31,304,9217);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Nueva Imperial',31,234,9208);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Padre las Casas',31,345,9220);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Perquenco',31,233,9206);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pitrufquén',31,237,9211);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pucón',31,242,9216);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Saavedra',31,236,9210);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Teodoro Schmidt',31,306,9219);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Toltén',31,239,9213);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Vilcún',31,228,9202);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Villarrica',31,241,9215);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cholchol',31,348,9221);
-- Prov. Malleco
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Angol',32,216,9101);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Collipulli',32,220,9105);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Curacautín',32,225,9110);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Ercilla',32,221,9106);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lonquimay',32,226,9111);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Los Sauces',32,218,9103);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lumaco',32,223,9108);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Purén',32,217,9102);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Renaico',32,219,9104);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Traiguén',32,222,9107);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Victoria',32,224,9109);
-- X - REGION DE LOS LAGOS
-- Prov Llanquihue
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Puerto Montt',33,261,10301);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Calbuco',33,265,10309);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cochamó',33,262,10302);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Fresia',33,268,10304);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Frutillar',33,269,10305);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Los Muermos',33,264,10308);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Llanquihue',33,267,10306);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Maullín',33,263,10307);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Puerto Varas',33,266,10303);
-- Prov Chiloe
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Castro',34,270,10401);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Ancud',34,277,10406);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Chonchi',34,271,10402);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Curaco de Vélez',34,276,00410);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Dalcahue',34,279,10408);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Puqueldón',34,274,10405);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Queilén',34,272,10403);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quellón',34,273,10404);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quemchi',34,278,10407);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quinchao',34,275,10415);
-- Prov Osorno
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Osorno',35,255,10201);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Puerto Octay',35,258,10203);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Purranque',35,260,10206);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Puyehue',35,256,10204);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Río Negro',35,259,10205);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Juan de la Costa',35,307,10207);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Pablo',35,257,10202);
-- Prov Palena
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Chaitén',36,280,10501);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Futaleufú',36,281,10503);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Hualaihué',36,308,10502);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Palena',36,282,10504);
-- XI - REGION DE AISEN DEL GRAL. CARLOS IBANEL DEL CAMPO
-- Prov. Coyhaique
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Coyhaique',37,284,11401);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lago Verde',37,312,11402);
-- Prov. Aysen
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Aysen',38,285,11101);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cisnes',38,286,11102);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Guaitecas',38,309,11104);
-- Prov. Capitan Prat
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cochrane',39,289,11301);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('O''Higgins',39,310,11302);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Tortel',39,311,11303);
-- Prov. General Carrera
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Chile Chico',40,287,11201);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Río Ibañez',40,0,0);
-- XII - REGION DE MAGALLANES Y DE LA ANTARTICA CHILENA
-- Prov. Magallanes
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Punta Arenas',41,290,12205);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Río Verde',41,314,12202);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Laguna Blanca',41,316,12206);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Gregorio',41,315,12204);
-- Prov Antartica chilena
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Antártica',42,0,0);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cabo de Hornos (Ex Navarino)',42,319,12401);
-- Prov. Tierra del fuego
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Porvenir',43,292,12301);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Primavera',43,317,12302);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Timaukel',43,318,12304);
-- Prov. Ultima esperanza
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Natales',44,291,12101);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Torres del Paine',44,313,12103);
-- XIII - Region Metropolitana
-- Prov Santiago
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cerrillos',45,333,14166);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Cerro Navia',45,324,14156);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Conchalí',45,75,14127);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('El Bosque',45,338,16165);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Estación Central',45,328,14157);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Huechuraba',45,334,14158);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Independencia',45,330,13167);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('La Cisterna',45,96,16110);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('La Florida',45,93,15128);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('La Granja',45,97,16131);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('La Pintana',45,327,16154);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('La Reina',45,92,15132);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Las Condes',45,71,15108);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lo Barnechea',45,332,15161);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lo Espejo',45,337,16164);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lo Prado',45,325,14155);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Macul',45,323,15151);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Maipú',45,94,14109);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Ñuñoa',45,91,15105);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pedro Aguirre Cerda',45,336,16162);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Peñalolén',45,322,15152);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Providencia',45,72,15103);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pudahuel',45,82,14111);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quilicura',45,79,14114);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Quinta Normal',45,81,14107);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Recoleta',45,329,13159);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Renca',45,77,14113);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Joaquín',45,335,16163);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Miguel',45,95,16106);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Ramón',45,326,16153);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Santiago',45,70,13101);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Vitacura',45,331,15160);
-- Prov Cordillera
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Puente Alto',46,100,16301);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Pirque',46,101,16302);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San José de Maipo',46,102,16303);
-- Prov Chacabuco
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Colina',47,76,14201);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lampa',47,78,14202);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Til Til',47,80,14203);
-- Prov Maipo
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Buin',48,103,16403);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Calera de Tango',48,99,16402);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Paine',48,104,16404);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Bernardo',48,98,16401);
-- Prov Melipilla
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Melipilla',49,88,14601);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('María Pinto',49,90,14602);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Curacaví',49,83,14603);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Alhué',49,109,14605);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('San Pedro',49,108,14604);
-- Prov Talagante
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Talagante',50,86,14501);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('El Monte',50,89,14503);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Isla de Maipo',50,87,14502);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Padre Hurtado',50,339,14505);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Peñaflor',50,85,14504);
-- XIV - REGION DE LOS RIOS
-- Prov Valdivia
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Valdivia',51,243,10101);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Corral',51,244,10106);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lanco',51,249,10103);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Los Lagos',51,247,10104);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Mafil',51,246,10107);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Mariquina',51,245,10102);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Paillaco',51,252,10110);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Panguipulli',51,250,10108);
-- Prov Ranco
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('La Unión',52,251,10109);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Futrono',52,248,10105);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Lago Ranco',52,254,10112);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Rio Bueno',52,253,10111);
-- XV - REGION DE ARICA Y PARINACOTA
-- Prov. Arica
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Arica',53,1,1101);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Camarones',53,295,1106);
-- Prov. Parinacota
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('Putre',54,294,1301);
INSERT INTO comunas (comuna_nombre, provincia_id, comuna_codigo_tesoreria, comuna_codigo_conara) VALUES ('General Lagos',54,293,1302);

