<?php
$config->bi->builtin->dataviews = array();

$config->bi->builtin->modules->dataviews = array(array('id' => 101, 'root' => 0, 'branch' => 0, 'name' => 'Grupos de datos integrados', 'parent' => 0, 'path' => ',101,', 'grade' => 1, 'order' => 10, 'type' => 'dataview', 'from' => 0));

$build = array('name' => 'Datos de la versión', 'code' => 'build', 'view' => 'ztv_build', 'group' => '101', 'mode' => 'text');
$build['sql'] = <<<EOT
SELECT product.name AS `product_name`,product.id AS `product_id`,project.name AS `project_name`,project.id AS `project_id`,execution.name AS `execution_name`,execution.id AS `execution_id`,build.name AS `name`,build.builder AS `builder`,build.stories AS `stories`,build.bugs AS `bugs`,build.date AS `date`,build.desc AS `desc` FROM zt_build AS `build`  LEFT JOIN zt_product AS `product` ON product.id   = build.product  LEFT JOIN zt_project AS `project` ON project.id   = build.project  LEFT JOIN zt_project AS `execution` ON execution.id = build.execution where `build`.deleted = '0' LIMIT 100
EOT;
$buildfields = array();
$buildfields['product_id']     = array('name' => 'Número', 'field' => 'id', 'object' => 'product', 'type' => 'object');
$buildfields['product_name']   = array('name' => 'Producto al que pertenece', 'field' => 'name', 'object' => 'product', 'type' => 'object');
$buildfields['project_id']     = array('name' => 'ID del proyecto', 'field' => 'id', 'object' => 'project', 'type' => 'object');
$buildfields['project_name']   = array('name' => 'Proyecto al que pertenece', 'field' => 'name', 'object' => 'project', 'type' => 'object');
$buildfields['execution_id']   = array('name' => 'Código del sprint', 'field' => 'id', 'object' => 'execution', 'type' => 'object');
$buildfields['execution_name'] = array('name' => 'Sprint al que pertenece', 'field' => 'name', 'object' => 'execution', 'type' => 'object');
$buildfields['name']           = array('name' => 'Nombre y código', 'field' => 'name', 'object' => 'build', 'type' => 'string');
$buildfields['builder']        = array('name' => 'Compilado por', 'field' => 'builder', 'object' => 'build', 'type' => 'user');
$buildfields['stories']        = array('name' => 'Historias completadas', 'field' => 'stories', 'object' => 'build', 'type' => 'string');
$buildfields['bugs']           = array('name' => 'Bugs resueltos', 'field' => 'bugs', 'object' => 'build', 'type' => 'string');
$buildfields['date']           = array('name' => 'Fecha de empaquetado', 'field' => 'date', 'object' => 'build', 'type' => 'date');
$buildfields['desc']           = array('name' => 'Descripción', 'field' => 'desc', 'object' => 'build', 'type' => 'string');
$build['fields'] = $buildfields;
$config->bi->builtin->dataviews[] = $build;

$product = array('name' => 'Datos del producto', 'code' => 'product', 'view' => 'ztv_product', 'group' => '101', 'mode' => 'text');
$product['sql'] = <<<EOT
SELECT product.id AS `id`,program.name AS `program_name`,program.id AS `program_id`,line.name AS `line_name`,product.name AS `name`,product.code AS `code`,product.type AS `type`,product.status AS `status`,product.desc AS `desc`,product.`PO` AS `PO`,product.`QD` AS `QD`,product.`RD` AS `RD`,product.`createdBy` AS `createdBy`,product.`createdDate` AS `createdDate` FROM zt_product AS `product`  LEFT JOIN zt_project AS `program` ON product.program = program.id  LEFT JOIN zt_module AS `line` ON product.line    = line.id where `product`.deleted = '0' LIMIT 100
EOT;
$productfields = array();
$productfields['id']           = array('name' => 'Número', 'field' => 'id', 'object' => 'product', 'type' => 'number');
$productfields['program_id']   = array('name' => 'Número', 'field' => 'id', 'object' => 'program', 'type' => 'object');
$productfields['program_name'] = array('name' => 'Programa al que pertenece', 'field' => 'name', 'object' => 'program', 'type' => 'object');
$productfields['line_name']    = array('name' => 'Línea de producto', 'field' => 'name', 'object' => 'line', 'type' => 'object');
$productfields['name']         = array('name' => 'Nombre del producto', 'field' => 'name', 'object' => 'product', 'type' => 'string');
$productfields['code']         = array('name' => 'Código del producto', 'field' => 'code', 'object' => 'product', 'type' => 'string');
$productfields['type']         = array('name' => 'Tipo de producto', 'field' => 'type', 'object' => 'product', 'type' => 'option');
$productfields['status']       = array('name' => 'Estado', 'field' => 'status', 'object' => 'product', 'type' => 'option');
$productfields['desc']         = array('name' => 'Descripción del producto', 'field' => 'desc', 'object' => 'product', 'type' => 'string');
$productfields['PO']           = array('name' => 'Responsable del producto', 'field' => 'PO', 'object' => 'product', 'type' => 'user');
$productfields['QD']           = array('name' => 'Responsable de pruebas', 'field' => 'QD', 'object' => 'product', 'type' => 'user');
$productfields['RD']           = array('name' => 'Responsable de lanzamientos', 'field' => 'RD', 'object' => 'product', 'type' => 'user');
$productfields['createdBy']    = array('name' => 'Creado por', 'field' => 'createdBy', 'object' => 'product', 'type' => 'user');
$productfields['createdDate']  = array('name' => 'Fecha de creación', 'field' => 'createdDate', 'object' => 'product', 'type' => 'date');
$product['fields'] = $productfields;
$config->bi->builtin->dataviews[] = $product;

$productplan = array('name' => 'Datos del plan del producto', 'code' => 'productplan', 'view' => 'ztv_productplan', 'group' => '101', 'mode' => 'text');
$productplan['sql'] = <<<EOT
SELECT product.name AS `product_name`,product.id AS `product_id`,productplan.title AS `title`,productplan.status AS `status`,productplan.desc AS `desc`,productplan.begin AS `begin`,productplan.end AS `end` FROM zt_productplan AS `productplan`  LEFT JOIN zt_product AS `product` ON productplan.product = product.id where `productplan`.deleted = '0' LIMIT 100
EOT;
$productplanfields = array();
$productplanfields['product_id']   = array('name' => 'Número', 'field' => 'id', 'object' => 'product', 'type' => 'object');
$productplanfields['product_name'] = array('name' => 'Producto', 'field' => 'name', 'object' => 'product', 'type' => 'object');
$productplanfields['title']        = array('name' => 'Nombre', 'field' => 'title', 'object' => 'productplan', 'type' => 'string');
$productplanfields['status']       = array('name' => 'Estado', 'field' => 'status', 'object' => 'productplan', 'type' => 'option');
$productplanfields['desc']         = array('name' => 'Descripción', 'field' => 'desc', 'object' => 'productplan', 'type' => 'string');
$productplanfields['begin']        = array('name' => 'Fecha de inicio', 'field' => 'begin', 'object' => 'productplan', 'type' => 'date');
$productplanfields['end']          = array('name' => 'Fecha de finalización', 'field' => 'end', 'object' => 'productplan', 'type' => 'date');
$productplan['fields'] = $productplanfields;
$config->bi->builtin->dataviews[] = $productplan;

$release = array('name' => 'Datos de lanzamientos del producto', 'code' => 'release', 'view' => 'ztv_release', 'group' => '101', 'mode' => 'text');
$release['sql'] = <<<EOT
SELECT product.name AS `product_name`,product.id AS `product_id`,project.name AS `project_name`,project.id AS `project_id`,build.name AS `build_name`,build.id AS `build_id`,`release`.name AS `name`,`release`.status AS `status`,`release`.`desc` AS `desc`,`release`.date AS `date`,`release`.stories AS `stories`,`release`.bugs AS `bugs`,`release`.`leftBugs` AS `leftBugs` FROM zt_release AS `release`  LEFT JOIN zt_product AS `product` ON `release`.product = product.id  LEFT JOIN zt_project AS `project` ON `release`.project = project.id  LEFT JOIN zt_build AS `build` ON `release`.build = build.id where `release`.deleted = '0' LIMIT 100
EOT;
$releasefields = array();
$releasefields['product_id']   = array('name' => 'Número', 'field' => 'id', 'object' => 'product', 'type' => 'object');
$releasefields['product_name'] = array('name' => 'Producto al que pertenece', 'field' => 'name', 'object' => 'product', 'type' => 'object');
$releasefields['project_id']   = array('name' => 'ID del proyecto', 'field' => 'id', 'object' => 'project', 'type' => 'object');
$releasefields['project_name'] = array('name' => 'Proyecto al que pertenece', 'field' => 'name', 'object' => 'project', 'type' => 'object');
$releasefields['build_id']     = array('name' => 'ID', 'field' => 'id', 'object' => 'build', 'type' => 'object');
$releasefields['build_name']   = array('name' => 'Versión', 'field' => 'name', 'object' => 'build', 'type' => 'object');
$releasefields['name']         = array('name' => 'Nombre del lanzamiento', 'field' => 'name', 'object' => 'release', 'type' => 'string');
$releasefields['status']       = array('name' => 'Estado', 'field' => 'status', 'object' => 'release', 'type' => 'option');
$releasefields['desc']         = array('name' => 'Descripción', 'field' => 'desc', 'object' => 'release', 'type' => 'string');
$releasefields['date']         = array('name' => 'Fecha de lanzamiento', 'field' => 'date', 'object' => 'release', 'type' => 'date');
$releasefields['stories']      = array('name' => 'Historias completadas', 'field' => 'stories', 'object' => 'release', 'type' => 'string');
$releasefields['bugs']         = array('name' => 'Bugs resueltos', 'field' => 'bugs', 'object' => 'release', 'type' => 'string');
$releasefields['leftBugs']     = array('name' => 'Bugs pendientes', 'field' => 'leftBugs', 'object' => 'release', 'type' => 'string');
$release['fields'] = $releasefields;
$config->bi->builtin->dataviews[] = $release;

$project = array('name' => 'Datos del proyecto', 'code' => 'project', 'view' => 'ztv_project', 'group' => '101', 'mode' => 'text');
$project['sql'] = <<<EOT
SELECT project.name AS `name`,project.code AS `code`,project.model AS `model`,project.type AS `type`,project.status AS `status`,project.desc AS `desc`,project.begin AS `begin`,project.end AS `end`,project.`PO` AS `PO`,project.`PM` AS `PM`,project.`QD` AS `QD`,project.`RD` AS `RD`,project.`openedBy` AS `openedBy`,project.`openedDate` AS `openedDate` FROM zt_project AS `project`  where `project`.deleted = '0' LIMIT 100
EOT;
$projectfields = array();
$projectfields['name']       = array('name' => 'Nombre del proyecto', 'field' => 'name', 'object' => 'project', 'type' => 'string');
$projectfields['code']       = array('name' => 'Código del proyecto', 'field' => 'code', 'object' => 'project', 'type' => 'string');
$projectfields['model']      = array('name' => 'Metodología de gestión del proyecto', 'field' => 'model', 'object' => 'project', 'type' => 'option');
$projectfields['type']       = array('name' => 'Tipo de proyecto', 'field' => 'type', 'object' => 'project', 'type' => 'option');
$projectfields['status']     = array('name' => 'Estado', 'field' => 'status', 'object' => 'project', 'type' => 'option');
$projectfields['desc']       = array('name' => 'Descripción del proyecto', 'field' => 'desc', 'object' => 'project', 'type' => 'string');
$projectfields['begin']      = array('name' => 'Inicio planificado', 'field' => 'begin', 'object' => 'project', 'type' => 'date');
$projectfields['end']        = array('name' => 'Finalización planificada', 'field' => 'end', 'object' => 'project', 'type' => 'date');
$projectfields['PO']         = array('name' => 'Responsable del producto', 'field' => 'PO', 'object' => 'project', 'type' => 'user');
$projectfields['PM']         = array('name' => 'Responsable del proyecto', 'field' => 'PM', 'object' => 'project', 'type' => 'user');
$projectfields['QD']         = array('name' => 'Responsable de pruebas', 'field' => 'QD', 'object' => 'project', 'type' => 'user');
$projectfields['RD']         = array('name' => 'Responsable de lanzamientos', 'field' => 'RD', 'object' => 'project', 'type' => 'user');
$projectfields['openedBy']   = array('name' => 'Creado por', 'field' => 'openedBy', 'object' => 'project', 'type' => 'user');
$projectfields['openedDate'] = array('name' => 'Fecha de creación', 'field' => 'openedDate', 'object' => 'project', 'type' => 'date');
$project['fields'] = $projectfields;
$config->bi->builtin->dataviews[] = $project;

$execution = array('name' => 'Datos de ejecución', 'code' => 'execution', 'view' => 'ztv_execution', 'group' => '101', 'mode' => 'text');
$execution['sql'] = <<<EOT
SELECT project.name AS `project_name`,project.id AS `project_id`,execution.name AS `name`,execution.code AS `code`,execution.type AS `type`,execution.status AS `status`,execution.desc AS `desc`,execution.begin AS `begin`,execution.end AS `end`,execution.`PO` AS `PO`,execution.`PM` AS `PM`,execution.`QD` AS `QD`,execution.`RD` AS `RD`,execution.`openedBy` AS `openedBy`,execution.`openedDate` AS `openedDate` FROM zt_project AS `execution`  LEFT JOIN zt_project AS `project` ON execution.project = project.id LIMIT 100
EOT;
$executionfields = array();
$executionfields['project_id']   = array('name' => 'ID del proyecto', 'field' => 'id', 'object' => 'project', 'type' => 'object');
$executionfields['project_name'] = array('name' => 'Nombre del proyecto', 'field' => 'name', 'object' => 'project', 'type' => 'object');
$executionfields['name']         = array('name' => 'Nombre del sprint', 'field' => 'name', 'object' => 'execution', 'type' => 'string');
$executionfields['code']         = array('name' => 'Código del sprint', 'field' => 'code', 'object' => 'execution', 'type' => 'string');
$executionfields['type']         = array('name' => 'Tipo de sprint', 'field' => 'type', 'object' => 'execution', 'type' => 'option');
$executionfields['status']       = array('name' => 'Estado del sprint', 'field' => 'status', 'object' => 'execution', 'type' => 'option');
$executionfields['desc']         = array('name' => 'Descripción del sprint', 'field' => 'desc', 'object' => 'execution', 'type' => 'string');
$executionfields['begin']        = array('name' => 'Inicio planificado', 'field' => 'begin', 'object' => 'execution', 'type' => 'date');
$executionfields['end']          = array('name' => 'Finalización planificada', 'field' => 'end', 'object' => 'execution', 'type' => 'date');
$executionfields['PO']           = array('name' => 'Responsable del producto', 'field' => 'PO', 'object' => 'execution', 'type' => 'user');
$executionfields['PM']           = array('name' => 'Responsable del sprint', 'field' => 'PM', 'object' => 'execution', 'type' => 'user');
$executionfields['QD']           = array('name' => 'Responsable de pruebas', 'field' => 'QD', 'object' => 'execution', 'type' => 'user');
$executionfields['RD']           = array('name' => 'Responsable de lanzamientos', 'field' => 'RD', 'object' => 'execution', 'type' => 'user');
$executionfields['openedBy']     = array('name' => 'Creado por', 'field' => 'openedBy', 'object' => 'execution', 'type' => 'user');
$executionfields['openedDate']   = array('name' => 'Fecha de creación', 'field' => 'openedDate', 'object' => 'execution', 'type' => 'date');
$execution['fields'] = $executionfields;
$config->bi->builtin->dataviews[] = $execution;

$task = array('name' => 'Datos de tareas', 'code' => 'task', 'view' => 'ztv_task', 'group' => '101', 'mode' => 'text');
$task['sql'] = <<<EOT
SELECT project.name AS `project_name`,project.id AS `project_id`,execution.name AS `execution_name`,execution.id AS `execution_id`,story.title AS `story_title`,story.id AS `story_id`,taskmodule.name AS `taskmodule_name`,taskmodule.id AS `taskmodule_id`,task.name AS `name`,task.pri AS `pri`,task.type AS `type`,task.status AS `status`,task.desc AS `desc`,task.estimate AS `estimate`,task.consumed AS `consumed`,task.left AS `left`,task.`estStarted` AS `estStarted`,task.deadline AS `deadline`,task.`assignedTo` AS `assignedTo`,task.`finishedBy` AS `finishedBy`,task.`closedBy` AS `closedBy`,task.`openedBy` AS `openedBy`,task.`openedDate` AS `openedDate` FROM zt_task AS `task`  LEFT JOIN zt_project AS `execution` ON task.execution = execution.id  LEFT JOIN zt_project AS `project` ON task.project   = project.id  LEFT JOIN zt_story AS `story` ON task.story     = story.id  LEFT JOIN zt_module AS `taskmodule` ON task.module    = taskmodule.id where `task`.deleted = '0' LIMIT 100
EOT;
$taskfields = array();
$taskfields['project_id']      = array('name' => 'ID del proyecto', 'field' => 'id', 'object' => 'project', 'type' => 'object');
$taskfields['project_name']    = array('name' => 'Proyecto al que pertenece', 'field' => 'name', 'object' => 'project', 'type' => 'object');
$taskfields['execution_id']    = array('name' => 'Código del sprint', 'field' => 'id', 'object' => 'execution', 'type' => 'object');
$taskfields['execution_name']  = array('name' => 'Ejecución a la que pertenece', 'field' => 'name', 'object' => 'execution', 'type' => 'object');
$taskfields['story_id']        = array('name' => 'Número', 'field' => 'id', 'object' => 'story', 'type' => 'object');
$taskfields['story_title']     = array('name' => 'Historias relacionadas', 'field' => 'title', 'object' => 'story', 'type' => 'object');
$taskfields['taskmodule_id']   = array('name' => 'Número', 'field' => 'id', 'object' => 'taskmodule', 'type' => 'object');
$taskfields['taskmodule_name'] = array('name' => 'Módulo al que pertenece', 'field' => 'name', 'object' => 'taskmodule', 'type' => 'object');
$taskfields['name']            = array('name' => 'Nombre de la tarea', 'field' => 'name', 'object' => 'task', 'type' => 'string');
$taskfields['pri']             = array('name' => 'Prioridad', 'field' => 'pri', 'object' => 'task', 'type' => 'option');
$taskfields['type']            = array('name' => 'Tipo de tarea', 'field' => 'type', 'object' => 'task', 'type' => 'option');
$taskfields['status']          = array('name' => 'Estado de la tarea', 'field' => 'status', 'object' => 'task', 'type' => 'option');
$taskfields['desc']            = array('name' => 'Descripción de la tarea', 'field' => 'desc', 'object' => 'task', 'type' => 'string');
$taskfields['estimate']        = array('name' => 'Estimación inicial', 'field' => 'estimate', 'object' => 'task', 'type' => 'string');
$taskfields['consumed']        = array('name' => 'Consumo total', 'field' => 'consumed', 'object' => 'task', 'type' => 'string');
$taskfields['left']            = array('name' => 'Estimado restante', 'field' => 'left', 'object' => 'task', 'type' => 'string');
$taskfields['estStarted']      = array('name' => 'Inicio estimado', 'field' => 'estStarted', 'object' => 'task', 'type' => 'date');
$taskfields['deadline']        = array('name' => 'Fecha límite', 'field' => 'deadline', 'object' => 'task', 'type' => 'date');
$taskfields['assignedTo']      = array('name' => 'Asignado a', 'field' => 'assignedTo', 'object' => 'task', 'type' => 'user');
$taskfields['finishedBy']      = array('name' => 'Completado por', 'field' => 'finishedBy', 'object' => 'task', 'type' => 'user');
$taskfields['closedBy']        = array('name' => 'Cerrado por', 'field' => 'closedBy', 'object' => 'task', 'type' => 'user');
$taskfields['openedBy']        = array('name' => 'Creado por', 'field' => 'openedBy', 'object' => 'task', 'type' => 'user');
$taskfields['openedDate']      = array('name' => 'Fecha de creación', 'field' => 'openedDate', 'object' => 'task', 'type' => 'date');
$task['fields'] = $taskfields;
$config->bi->builtin->dataviews[] = $task;

$bug = array('name' => 'Datos de Bug', 'code' => 'bug', 'view' => 'ztv_bug', 'group' => '101', 'mode' => 'text');
$bug['sql'] = <<<EOT
SELECT bug.id AS `id`,bug.title AS `title`,bug.steps AS `steps`,bug.status AS `status`,bug.confirmed AS `confirmed`,bug.severity AS `severity`,product.name AS `product_name`,product.id AS `product_id`,project.name AS `project_name`,project.id AS `project_id`,bugmodule.name AS `bugmodule_name`,bugmodule.id AS `bugmodule_id`,story.title AS `story_title`,story.id AS `story_id`,bug.pri AS `pri`,bug.`openedBy` AS `openedBy`,bug.`openedDate` AS `openedDate`,bug.`resolvedBy` AS `resolvedBy`,bug.resolution AS `resolution`,bug.`resolvedDate` AS `resolvedDate` FROM zt_bug AS `bug`  LEFT JOIN zt_product AS `product` ON product.id = bug.product  LEFT JOIN zt_story AS `story` ON story.id = bug.story  LEFT JOIN zt_module AS `productline` ON productline.id = product.line  LEFT JOIN zt_project AS `program` ON program.id = product.program  LEFT JOIN zt_project AS `project` ON project.id = bug.project  LEFT JOIN zt_module AS `bugmodule` ON bugmodule.id = bug.module where `bug`.deleted = '0' LIMIT 100
EOT;
$bugfields = array();
$bugfields['id']             = array('name' => 'ID del Bug', 'field' => 'id', 'object' => 'bug', 'type' => 'number');
$bugfields['title']          = array('name' => 'Título del Bug', 'field' => 'title', 'object' => 'bug', 'type' => 'string');
$bugfields['steps']          = array('name' => 'Pasos para reproducir', 'field' => 'steps', 'object' => 'bug', 'type' => 'text');
$bugfields['status']         = array('name' => 'Estado del Bug', 'field' => 'status', 'object' => 'bug', 'type' => 'option');
$bugfields['confirmed']      = array('name' => 'Confirmado', 'field' => 'confirmed', 'object' => 'bug', 'type' => 'option');
$bugfields['severity']       = array('name' => 'Severidad', 'field' => 'severity', 'object' => 'bug', 'type' => 'option');
$bugfields['product_id']     = array('name' => 'Número', 'field' => 'id', 'object' => 'product', 'type' => 'object');
$bugfields['product_name']   = array('name' => 'Producto al que pertenece', 'field' => 'name', 'object' => 'product', 'type' => 'object');
$bugfields['project_id']     = array('name' => 'ID del proyecto', 'field' => 'id', 'object' => 'project', 'type' => 'object');
$bugfields['project_name']   = array('name' => 'Proyecto al que pertenece', 'field' => 'name', 'object' => 'project', 'type' => 'object');
$bugfields['bugmodule_id']   = array('name' => 'Número', 'field' => 'id', 'object' => 'bugmodule', 'type' => 'object');
$bugfields['bugmodule_name'] = array('name' => 'Módulo al que pertenece', 'field' => 'name', 'object' => 'bugmodule', 'type' => 'object');
$bugfields['story_id']       = array('name' => 'Número', 'field' => 'id', 'object' => 'story', 'type' => 'object');
$bugfields['story_title']    = array('name' => 'Historias', 'field' => 'title', 'object' => 'story', 'type' => 'object');
$bugfields['pri']            = array('name' => 'Prioridad', 'field' => 'pri', 'object' => 'bug', 'type' => 'option');
$bugfields['openedBy']       = array('name' => 'Creado por', 'field' => 'openedBy', 'object' => 'bug', 'type' => 'user');
$bugfields['openedDate']     = array('name' => 'Fecha de creación', 'field' => 'openedDate', 'object' => 'bug', 'type' => 'date');
$bugfields['resolvedBy']     = array('name' => 'Resuelto por', 'field' => 'resolvedBy', 'object' => 'bug', 'type' => 'user');
$bugfields['resolution']     = array('name' => 'Solución', 'field' => 'resolution', 'object' => 'bug', 'type' => 'option');
$bugfields['resolvedDate']   = array('name' => 'Fecha de resolución', 'field' => 'resolvedDate', 'object' => 'bug', 'type' => 'date');
$bug['fields'] = $bugfields;
$config->bi->builtin->dataviews[] = $bug;

$bugbuild = array('name' => 'Datos de Bug por versión', 'code' => 'bugbuild', 'view' => 'ztv_bugbuild', 'group' => '101', 'mode' => 'text');
$bugbuild['sql'] = <<<EOT
SELECT bug.id AS `id`,bug.title AS `title`,bug.steps AS `steps`,bug.status AS `status`,bug.confirmed AS `confirmed`,bug.severity AS `severity`,product.name AS `product_name`,product.id AS `product_id`,project.name AS `project_name`,project.id AS `project_id`,build.name AS `build_name`,build.id AS `build_id`,module.name AS `module_name`,module.id AS `module_id`,testtask.name AS `testtask_name`,testtask.id AS `testtask_id`,bug.pri AS `pri`,bug.`openedBy` AS `openedBy`,bug.`openedDate` AS `openedDate`,bug.`resolvedBy` AS `resolvedBy`,bug.resolution AS `resolution`,bug.`resolvedDate` AS `resolvedDate`,casemodule.name AS `casemodule_name`,casemodule.id AS `casemodule_id` FROM zt_bug AS `bug`  LEFT JOIN zt_product AS `product` ON product.id = bug.product  LEFT JOIN zt_testtask AS `testtask` ON testtask.id = bug.testtask  LEFT JOIN zt_build AS `build` ON build.id = testtask.build  LEFT JOIN zt_project AS `execution` ON execution.id = build.execution  LEFT JOIN zt_project AS `project` ON project.id = build.project  LEFT JOIN zt_module AS `module` ON module.id = bug.module  LEFT JOIN zt_case AS `testcase` ON testcase.id = bug.case  LEFT JOIN zt_module AS `casemodule` ON casemodule.id = testcase.module LIMIT 100
EOT;
$bugbuildfields = array();
$bugbuildfields['id']              = array('name' => 'ID del Bug', 'field' => 'id', 'object' => 'bugbuild', 'type' => 'number');
$bugbuildfields['title']           = array('name' => 'Título del Bug', 'field' => 'title', 'object' => 'bugbuild', 'type' => 'string');
$bugbuildfields['steps']           = array('name' => 'Pasos para reproducir', 'field' => 'steps', 'object' => 'bugbuild', 'type' => 'text');
$bugbuildfields['status']          = array('name' => 'Estado del Bug', 'field' => 'status', 'object' => 'bugbuild', 'type' => 'option');
$bugbuildfields['confirmed']       = array('name' => 'Confirmado', 'field' => 'confirmed', 'object' => 'bugbuild', 'type' => 'option');
$bugbuildfields['severity']        = array('name' => 'Severidad', 'field' => 'severity', 'object' => 'bugbuild', 'type' => 'option');
$bugbuildfields['product_id']      = array('name' => 'Número', 'field' => 'id', 'object' => 'product', 'type' => 'object');
$bugbuildfields['product_name']    = array('name' => 'Producto al que pertenece', 'field' => 'name', 'object' => 'product', 'type' => 'object');
$bugbuildfields['project_id']      = array('name' => 'ID del proyecto', 'field' => 'id', 'object' => 'project', 'type' => 'object');
$bugbuildfields['project_name']    = array('name' => 'Proyecto al que pertenece', 'field' => 'name', 'object' => 'project', 'type' => 'object');
$bugbuildfields['build_id']        = array('name' => 'ID', 'field' => 'id', 'object' => 'build', 'type' => 'object');
$bugbuildfields['build_name']      = array('name' => 'Versión', 'field' => 'name', 'object' => 'build', 'type' => 'object');
$bugbuildfields['module_id']       = array('name' => 'Número', 'field' => 'id', 'object' => 'module', 'type' => 'object');
$bugbuildfields['module_name']     = array('name' => 'Módulo al que pertenece', 'field' => 'name', 'object' => 'module', 'type' => 'object');
$bugbuildfields['testtask_id']     = array('name' => 'Número', 'field' => 'id', 'object' => 'testtask', 'type' => 'object');
$bugbuildfields['testtask_name']   = array('name' => 'Tarea de prueba', 'field' => 'name', 'object' => 'testtask', 'type' => 'object');
$bugbuildfields['pri']             = array('name' => 'Prioridad', 'field' => 'pri', 'object' => 'bugbuild', 'type' => 'option');
$bugbuildfields['openedBy']        = array('name' => 'Creado por', 'field' => 'openedBy', 'object' => 'bugbuild', 'type' => 'user');
$bugbuildfields['openedDate']      = array('name' => 'Fecha de creación', 'field' => 'openedDate', 'object' => 'bugbuild', 'type' => 'datetime');
$bugbuildfields['resolvedBy']      = array('name' => 'Resuelto por', 'field' => 'resolvedBy', 'object' => 'bugbuild', 'type' => 'user');
$bugbuildfields['resolution']      = array('name' => 'Solución', 'field' => 'resolution', 'object' => 'bugbuild', 'type' => 'option');
$bugbuildfields['resolvedDate']    = array('name' => 'Fecha de resolución', 'field' => 'resolvedDate', 'object' => 'bugbuild', 'type' => 'datetime');
$bugbuildfields['casemodule_id']   = array('name' => 'Número', 'field' => 'id', 'object' => 'casemodule', 'type' => 'object');
$bugbuildfields['casemodule_name'] = array('name' => 'Módulo', 'field' => 'name', 'object' => 'casemodule', 'type' => 'object');
$bugbuild['fields'] = $bugbuildfields;
$config->bi->builtin->dataviews[] = $bugbuild;

$story = array('name' => 'Datos de historias', 'code' => 'story', 'view' => 'ztv_story', 'group' => '101', 'mode' => 'text');
$story['sql'] = <<<EOT
SELECT story.id AS `id`,story.title AS `title`,story.status AS `status`,story.stage AS `stage`,story.pri AS `pri`,product.name AS `product_name`,product.id AS `product_id`,storymodule.name AS `storymodule_name`,storymodule.id AS `storymodule_id`,story.`closedDate` AS `closedDate`,story.`closedReason` AS `closedReason`,story.`openedBy` AS `openedBy`,story.`openedDate` AS `openedDate` FROM zt_story AS `story`  LEFT JOIN zt_product AS `product` ON product.id = story.product  LEFT JOIN zt_module AS `storymodule` ON storymodule.id = story.module where `story`.deleted = '0' LIMIT 100
EOT;
$storyfields = array();
$storyfields['id']               = array('name' => 'Número', 'field' => 'id', 'object' => 'story', 'type' => 'number');
$storyfields['title']            = array('name' => 'Nombre de la historia', 'field' => 'title', 'object' => 'story', 'type' => 'string');
$storyfields['status']           = array('name' => 'Estado actual', 'field' => 'status', 'object' => 'story', 'type' => 'option');
$storyfields['stage']            = array('name' => 'Etapa actual', 'field' => 'stage', 'object' => 'story', 'type' => 'option');
$storyfields['pri']              = array('name' => 'Prioridad', 'field' => 'pri', 'object' => 'story', 'type' => 'option');
$storyfields['product_id']       = array('name' => 'Número', 'field' => 'id', 'object' => 'product', 'type' => 'object');
$storyfields['product_name']     = array('name' => 'Producto al que pertenece', 'field' => 'name', 'object' => 'product', 'type' => 'object');
$storyfields['storymodule_id']   = array('name' => 'Número', 'field' => 'id', 'object' => 'storymodule', 'type' => 'object');
$storyfields['storymodule_name'] = array('name' => 'Módulo al que pertenece', 'field' => 'name', 'object' => 'storymodule', 'type' => 'object');
$storyfields['closedDate']       = array('name' => 'Fecha de cierre', 'field' => 'closedDate', 'object' => 'story', 'type' => 'date');
$storyfields['closedReason']     = array('name' => 'Motivo de cierre', 'field' => 'closedReason', 'object' => 'story', 'type' => 'option');
$storyfields['openedBy']         = array('name' => 'Creado por', 'field' => 'openedBy', 'object' => 'story', 'type' => 'user');
$storyfields['openedDate']       = array('name' => 'Fecha de creación', 'field' => 'openedDate', 'object' => 'story', 'type' => 'date');
$story['fields'] = $storyfields;
$config->bi->builtin->dataviews[] = $story;

$testcase = array('name' => 'Datos de casos de prueba', 'code' => 'testcase', 'view' => 'ztv_testcase', 'group' => '101', 'mode' => 'text');
$testcase['sql'] = <<<EOT
SELECT testcase.id AS `id`,testcase.title AS `title`,testcase.pri AS `pri`,testcase.type AS `type`,testcase.stage AS `stage`,testcase.status AS `status`,testcase.version AS `version`,product.name AS `product_name`,product.id AS `product_id`,story.title AS `story_title`,story.id AS `story_id`,casemodule.name AS `casemodule_name`,casemodule.id AS `casemodule_id`,testcase.`openedBy` AS `openedBy`,testcase.`openedDate` AS `openedDate` FROM zt_case AS `testcase`  LEFT JOIN zt_product AS `product` ON product.id = testcase.product  LEFT JOIN zt_module AS `casemodule` ON casemodule.id = testcase.module  LEFT JOIN zt_story AS `story` ON story.id = testcase.story  LEFT JOIN zt_casestep AS `casestep` ON casestep.case = testcase.id where `testcase`.deleted = '0' LIMIT 100
EOT;
$testcasefields = array();
$testcasefields['id']              = array('name' => 'Número del caso de prueba', 'field' => 'id', 'object' => 'testcase', 'type' => 'number');
$testcasefields['title']           = array('name' => 'Título del caso de prueba', 'field' => 'title', 'object' => 'testcase', 'type' => 'string');
$testcasefields['pri']             = array('name' => 'Prioridad', 'field' => 'pri', 'object' => 'testcase', 'type' => 'option');
$testcasefields['type']            = array('name' => 'Tipo de caso de prueba', 'field' => 'type', 'object' => 'testcase', 'type' => 'option');
$testcasefields['stage']           = array('name' => 'Fase aplicable', 'field' => 'stage', 'object' => 'testcase', 'type' => 'option');
$testcasefields['status']          = array('name' => 'Estado del caso de prueba', 'field' => 'status', 'object' => 'testcase', 'type' => 'option');
$testcasefields['version']         = array('name' => 'Versión del caso de prueba', 'field' => 'version', 'object' => 'testcase', 'type' => 'number');
$testcasefields['product_id']      = array('name' => 'Número', 'field' => 'id', 'object' => 'product', 'type' => 'object');
$testcasefields['product_name']    = array('name' => 'Producto al que pertenece', 'field' => 'name', 'object' => 'product', 'type' => 'object');
$testcasefields['story_id']        = array('name' => 'Número', 'field' => 'id', 'object' => 'story', 'type' => 'object');
$testcasefields['story_title']     = array('name' => 'Historias relacionadas', 'field' => 'title', 'object' => 'story', 'type' => 'object');
$testcasefields['casemodule_id']   = array('name' => 'Número', 'field' => 'id', 'object' => 'casemodule', 'type' => 'object');
$testcasefields['casemodule_name'] = array('name' => 'Módulo al que pertenece', 'field' => 'name', 'object' => 'casemodule', 'type' => 'object');
$testcasefields['openedBy']        = array('name' => 'Creado por', 'field' => 'openedBy', 'object' => 'testcase', 'type' => 'user');
$testcasefields['openedDate']      = array('name' => 'Fecha de creación', 'field' => 'openedDate', 'object' => 'testcase', 'type' => 'date');
$testcase['fields'] = $testcasefields;
$config->bi->builtin->dataviews[] = $testcase;

$casestep = array('name' => 'Datos de pasos del caso de prueba', 'code' => 'casestep', 'view' => 'ztv_casestep', 'group' => '101', 'mode' => 'text');
$casestep['sql'] = <<<EOT
SELECT testcase.title AS `testcase_title`,testcase.id AS `testcase_id`,casestep.type AS `type`,casestep.desc AS `desc`,casestep.expect AS `expect`,casestep.version AS `version` FROM zt_casestep AS `casestep`  LEFT JOIN zt_case AS `testcase` ON testcase.id = casestep.`case` LIMIT 100
EOT;
$casestepfields = array();
$casestepfields['testcase_id']    = array('name' => 'Número del caso de prueba', 'field' => 'id', 'object' => 'testcase', 'type' => 'object');
$casestepfields['testcase_title'] = array('name' => 'Caso de prueba', 'field' => 'title', 'object' => 'testcase', 'type' => 'object');
$casestepfields['type']           = array('name' => 'Tipo de paso', 'field' => 'type', 'object' => 'casestep', 'type' => 'option');
$casestepfields['desc']           = array('name' => 'Paso', 'field' => 'desc', 'object' => 'casestep', 'type' => 'string');
$casestepfields['expect']         = array('name' => 'Resultado esperado', 'field' => 'expect', 'object' => 'casestep', 'type' => 'string');
$casestepfields['version']        = array('name' => 'Versión del caso de prueba', 'field' => 'version', 'object' => 'casestep', 'type' => 'number');
$casestep['fields'] = $casestepfields;
$config->bi->builtin->dataviews[] = $casestep;

$testtask = array('name' => 'Lista de tareas de prueba', 'code' => 'testtask', 'view' => 'ztv_testtask', 'group' => '101', 'mode' => 'text');
$testtask['sql'] = <<<EOT
SELECT product.name AS `product_name`,product.id AS `product_id`,project.name AS `project_name`,project.id AS `project_id`,execution.name AS `execution_name`,execution.id AS `execution_id`,build.name AS `build_name`,build.id AS `build_id`,testtask.id AS `id`,testtask.name AS `name`,testtask.type AS `type`,testtask.owner AS `owner`,testtask.pri AS `pri`,testtask.begin AS `begin`,testtask.end AS `end`,testtask.status AS `status` FROM zt_testtask AS `testtask`  LEFT JOIN zt_product AS `product` ON product.id   = testtask.product  LEFT JOIN zt_project AS `project` ON project.id   = testtask.project  LEFT JOIN zt_project AS `execution` ON execution.id = testtask.execution  LEFT JOIN zt_build AS `build` ON build.id     = testtask.build LIMIT 100
EOT;
$testtaskfields = array();
$testtaskfields['product_id']     = array('name' => 'Número', 'field' => 'id', 'object' => 'product', 'type' => 'object');
$testtaskfields['product_name']   = array('name' => 'Producto al que pertenece', 'field' => 'name', 'object' => 'product', 'type' => 'object');
$testtaskfields['project_id']     = array('name' => 'ID del proyecto', 'field' => 'id', 'object' => 'project', 'type' => 'object');
$testtaskfields['project_name']   = array('name' => 'Proyecto al que pertenece', 'field' => 'name', 'object' => 'project', 'type' => 'object');
$testtaskfields['execution_id']   = array('name' => 'Código del sprint', 'field' => 'id', 'object' => 'execution', 'type' => 'object');
$testtaskfields['execution_name'] = array('name' => 'Ejecución a la que pertenece', 'field' => 'name', 'object' => 'execution', 'type' => 'object');
$testtaskfields['build_id']       = array('name' => 'ID', 'field' => 'id', 'object' => 'build', 'type' => 'object');
$testtaskfields['build_name']     = array('name' => 'Versión', 'field' => 'name', 'object' => 'build', 'type' => 'object');
$testtaskfields['id']             = array('name' => 'Número', 'field' => 'id', 'object' => 'testtask', 'type' => 'number');
$testtaskfields['name']           = array('name' => 'Nombre', 'field' => 'name', 'object' => 'testtask', 'type' => 'string');
$testtaskfields['type']           = array('name' => 'Tipo de prueba', 'field' => 'type', 'object' => 'testtask', 'type' => 'option');
$testtaskfields['owner']          = array('name' => 'Responsable', 'field' => 'owner', 'object' => 'testtask', 'type' => 'user');
$testtaskfields['pri']            = array('name' => 'Prioridad', 'field' => 'pri', 'object' => 'testtask', 'type' => 'option');
$testtaskfields['begin']          = array('name' => 'Fecha de inicio', 'field' => 'begin', 'object' => 'testtask', 'type' => 'date');
$testtaskfields['end']            = array('name' => 'Fecha de finalización', 'field' => 'end', 'object' => 'testtask', 'type' => 'date');
$testtaskfields['status']         = array('name' => 'Estado actual', 'field' => 'status', 'object' => 'testtask', 'type' => 'option');
$testtask['fields'] = $testtaskfields;
$config->bi->builtin->dataviews[] = $testtask;

$testrun = array('name' => 'Estado de ejecución de casos en la tarea de prueba', 'code' => 'testrun', 'view' => 'ztv_testrun', 'group' => '101', 'mode' => 'text');
$testrun['sql'] = <<<EOT
SELECT testtask.name AS `testtask_name`,testtask.id AS `testtask_id`,testcase.title AS `testcase_title`,testcase.id AS `testcase_id`,testrun.`assignedTo` AS `assignedTo`,project.name AS `project_name`,project.id AS `project_id`,build.name AS `build_name`,build.id AS `build_id`,execution.name AS `execution_name`,execution.id AS `execution_id`,casemodule.name AS `casemodule_name`,casemodule.id AS `casemodule_id`,testrun.`lastRunner` AS `lastRunner`,testrun.`lastRunDate` AS `lastRunDate`,testrun.`lastRunResult` AS `lastRunResult` FROM zt_testrun AS `testrun`  LEFT JOIN zt_case AS `testcase` ON testcase.id   = testrun.case  LEFT JOIN zt_product AS `product` ON product.id    = testcase.product  LEFT JOIN zt_testtask AS `testtask` ON testtask.id   = testrun.task  LEFT JOIN zt_module AS `casemodule` ON casemodule.id = testcase.module  LEFT JOIN zt_project AS `project` ON project.id    = testtask.project  LEFT JOIN zt_project AS `execution` ON execution.id  = testtask.execution  LEFT JOIN zt_build AS `build` ON build.id      = testtask.build LIMIT 100
EOT;
$testrunfields = array();
$testrunfields['testtask_id']     = array('name' => 'Número', 'field' => 'id', 'object' => 'testtask', 'type' => 'object');
$testrunfields['testtask_name']   = array('name' => 'Tarea de prueba', 'field' => 'name', 'object' => 'testtask', 'type' => 'object');
$testrunfields['testcase_id']     = array('name' => 'Número del caso de prueba', 'field' => 'id', 'object' => 'testcase', 'type' => 'object');
$testrunfields['testcase_title']  = array('name' => 'Caso de prueba', 'field' => 'title', 'object' => 'testcase', 'type' => 'object');
$testrunfields['assignedTo']      = array('name' => 'Asignado a', 'field' => 'assignedTo', 'object' => 'testrun', 'type' => 'user');
$testrunfields['project_id']      = array('name' => 'ID del proyecto', 'field' => 'id', 'object' => 'project', 'type' => 'object');
$testrunfields['project_name']    = array('name' => 'Proyecto', 'field' => 'name', 'object' => 'project', 'type' => 'object');
$testrunfields['build_id']        = array('name' => 'Número', 'field' => 'id', 'object' => 'build', 'type' => 'object');
$testrunfields['build_name']      = array('name' => 'Versión', 'field' => 'name', 'object' => 'build', 'type' => 'object');
$testrunfields['execution_id']    = array('name' => 'Código del sprint', 'field' => 'id', 'object' => 'execution', 'type' => 'object');
$testrunfields['execution_name']  = array('name' => 'Ejecutar', 'field' => 'name', 'object' => 'execution', 'type' => 'object');
$testrunfields['casemodule_id']   = array('name' => 'Número', 'field' => 'id', 'object' => 'casemodule', 'type' => 'object');
$testrunfields['casemodule_name'] = array('name' => 'Mantenimiento de módulos', 'field' => 'name', 'object' => 'casemodule', 'type' => 'object');
$testrunfields['lastRunner']      = array('name' => 'Último ejecutor', 'field' => 'lastRunner', 'object' => 'testrun', 'type' => 'user');
$testrunfields['lastRunDate']     = array('name' => 'Hora de última ejecución', 'field' => 'lastRunDate', 'object' => 'testrun', 'type' => 'user');
$testrunfields['lastRunResult']   = array('name' => 'Resultado', 'field' => 'lastRunResult', 'object' => 'testrun', 'type' => 'option');
$testrun['fields'] = $testrunfields;
$config->bi->builtin->dataviews[] = $testrun;

$testresult = array('name' => 'Resultado de cada ejecución de casos en la tarea de prueba', 'code' => 'testresult', 'view' => 'ztv_testresult', 'group' => '101', 'mode' => 'text');
$testresult['sql'] = <<<EOT
SELECT testresult.`caseResult` AS `caseResult`,testresult.`stepResults` AS `stepResults`,testresult.`lastRunner` AS `lastRunner`,testresult.date AS `date`,testcase.title AS `testcase_title`,testcase.id AS `testcase_id`,testtask.name AS `testtask_name`,testtask.id AS `testtask_id`,execution.name AS `execution_name`,execution.id AS `execution_id`,project.name AS `project_name`,project.id AS `project_id`,casemodule.name AS `casemodule_name`,casemodule.id AS `casemodule_id`,build.name AS `build_name`,build.id AS `build_id`,caselib.name AS `caselib_name`,caselib.id AS `caselib_id` FROM zt_testresult AS `testresult`  LEFT JOIN zt_case AS `testcase` ON testcase.id   = testresult.case  LEFT JOIN zt_testrun AS `testrun` ON testrun.id    = testresult.run  LEFT JOIN zt_testtask AS `testtask` ON testrun.task  = testtask.id  LEFT JOIN zt_project AS `project` ON project.id    = testtask.project  LEFT JOIN zt_project AS `execution` ON execution.id  = testtask.execution  LEFT JOIN zt_module AS `casemodule` ON casemodule.id = testcase.module  LEFT JOIN zt_build AS `build` ON build.id      = testtask.build  LEFT JOIN zt_testsuite AS `caselib` ON caselib.id    = testcase.lib  LEFT JOIN zt_product AS `product` ON product.id    = testcase.product LIMIT 100
EOT;
$testresultfields = array();
$testresultfields['caseResult']      = array('name' => 'Resultado de la prueba', 'field' => 'caseResult', 'object' => 'testresult', 'type' => 'option');
$testresultfields['stepResults']     = array('name' => 'Resultado del paso', 'field' => 'stepResults', 'object' => 'testresult', 'type' => 'json');
$testresultfields['lastRunner']      = array('name' => 'Último ejecutor', 'field' => 'lastRunner', 'object' => 'testresult', 'type' => 'user');
$testresultfields['date']            = array('name' => 'Hora de la prueba', 'field' => 'date', 'object' => 'testresult', 'type' => 'date');
$testresultfields['testcase_id']     = array('name' => 'Número del caso de prueba', 'field' => 'id', 'object' => 'testcase', 'type' => 'object');
$testresultfields['testcase_title']  = array('name' => 'Caso de prueba', 'field' => 'title', 'object' => 'testcase', 'type' => 'object');
$testresultfields['testtask_id']     = array('name' => 'Número', 'field' => 'id', 'object' => 'testtask', 'type' => 'object');
$testresultfields['testtask_name']   = array('name' => 'Tarea de prueba', 'field' => 'name', 'object' => 'testtask', 'type' => 'object');
$testresultfields['execution_id']    = array('name' => 'Código del sprint', 'field' => 'id', 'object' => 'execution', 'type' => 'object');
$testresultfields['execution_name']  = array('name' => 'Ejecutar', 'field' => 'name', 'object' => 'execution', 'type' => 'object');
$testresultfields['project_id']      = array('name' => 'ID del proyecto', 'field' => 'id', 'object' => 'project', 'type' => 'object');
$testresultfields['project_name']    = array('name' => 'Proyecto', 'field' => 'name', 'object' => 'project', 'type' => 'object');
$testresultfields['casemodule_id']   = array('name' => 'Número', 'field' => 'id', 'object' => 'casemodule', 'type' => 'object');
$testresultfields['casemodule_name'] = array('name' => 'Mantenimiento de módulos', 'field' => 'name', 'object' => 'casemodule', 'type' => 'object');
$testresultfields['build_id']        = array('name' => 'Número', 'field' => 'id', 'object' => 'build', 'type' => 'object');
$testresultfields['build_name']      = array('name' => 'Versión', 'field' => 'name', 'object' => 'build', 'type' => 'object');
$testresultfields['caselib_id']      = array('name' => 'Número', 'field' => 'id', 'object' => 'caselib', 'type' => 'object');
$testresultfields['caselib_name']    = array('name' => 'Biblioteca de casos de prueba', 'field' => 'name', 'object' => 'caselib', 'type' => 'object');
$testresult['fields'] = $testresultfields;
$config->bi->builtin->dataviews[] = $testresult;
