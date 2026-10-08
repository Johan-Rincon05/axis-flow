<?php
$config->bi->builtin->pivots = array();

$config->bi->builtin->pivots[] = array
(
    'id'          => 1000,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla dinámica de duración de proyectos completados', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
    'code'        => 'finishedProjectDuration',
    'dimension'   => '2',
    'driver'      => 'mysql',
    'group'       => '86',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.name,
    t2.program1,
    t1.begin,
    t1.`end`,
    t1.`realBegan`,
    t1.`realEnd`,
    t1.`closedDate`,
    t1.realduration,
    t1.realduration - t1.planduration as duration_deviation,
    round((t1.realduration - t1.planduration) / t1.planduration, 3) as rate
from
    (select
        name,
        CAST(substr(path,2,4) AS DECIMAL) as program1,
        begin,
        `end`,
        `realBegan`,
        `realEnd`,
        left(`closedDate`, 10) as `closedDate`,
        datediff(`end`, `begin`) as planduration,
        ifnull(if(left(`realEnd`,4) != '0000',datediff(`realEnd`,`realBegan`),datediff(`closedDate`,`realBegan`)),0) realduration
    from zt_project
    where type='project' and status='closed' and deleted='0') t1
left join
    (select
        id as programid,
        name as program1
    from zt_project
    where type='program'
    and grade=1) t2
on t1.program1=t2.programid;
EOT,
    'settings'  => array
    (
        'columns'  => array
        (
            array('field' => 'begin', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'end', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'realBegan', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'realEnd', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'closedDate', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'realduration', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'duration_deviation', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'rate', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow')
        ),
        'group1'   => 'program1',
        'group2'   => 'name',
        'lastStep' => '4'
    ),
    'fields'    => array
    (
        'name'               => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'program1'           => array('object' => 'project', 'field' => 'program1', 'type' => 'string'),
        'begin'              => array('object' => 'project', 'field' => 'begin', 'type' => 'date'),
        'end'                => array('object' => 'project', 'field' => 'end', 'type' => 'date'),
        'realBegan'          => array('object' => 'project', 'field' => 'realBegan', 'type' => 'date'),
        'realEnd'            => array('object' => 'project', 'field' => 'realEnd', 'type' => 'date'),
        'closedDate'         => array('object' => 'project', 'field' => 'closedDate', 'type' => 'date'),
        'realduration'       => array('object' => 'project', 'field' => 'realduration', 'type' => 'number'),
        'duration_deviation' => array('object' => 'project', 'field' => 'duration_deviation', 'type' => 'number'),
        'rate'               => array('object' => 'project', 'field' => 'rate', 'type' => 'number')
    ),
    'langs'     => array
    (
        'name'               => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'program1'           => array('zh-cn' => 'Programa de primer nivel', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'begin'              => array('zh-cn' => 'Fecha de inicio planificada', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'end'                => array('zh-cn' => 'Fecha de finalización planificada', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'realBegan'          => array('zh-cn' => 'Fecha de inicio real', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'realEnd'            => array('zh-cn' => 'Fecha de finalización real', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'closedDate'         => array('zh-cn' => 'Fecha de cierre', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'realduration'       => array('zh-cn' => 'Duración real', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'duration_deviation' => array('zh-cn' => 'Desviación de duración', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'rate'               => array('zh-cn' => 'Tasa de desviación de duración', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1001,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla dinámica de horas de trabajo de proyectos completados', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
    'code'        => 'finishedProjectHour',
    'dimension'   => '2',
    'driver'      => 'mysql',
    'group'       => '85',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.name as "projectname",
    t4.program1 as "topprogram",
    round(t2.estimate, 2) as "estimate",
    round(t2.consumed, 2) as "consumed",
    round(t2.consumed - t2.estimate, 2) as "deviation",
    round((t2.consumed - t2.estimate) / t2.estimate, 2) as "deviationrate",
    coalesce(t3.storys, 0) as "finishedstorys",
    coalesce(t3.storyestimate, 0) as "finishedstorysmate",
    round(coalesce(t3.storyestimate, 0) / coalesce(t2.consumed, 0), 2) as "demandsizesperunittime",
    t1.`closedDate` as "closeddate"
from
    (
        select
            id,
            name,
            CAST(substr(`path`, 2, 4) AS DECIMAL) as program1,
            `closedDate`
        from zt_project
        where deleted = '0'
        and type = 'project'
        and status = 'closed'
    ) as t1
    left join (
        select
            project,
            sum(estimate) as estimate,
            sum(consumed) as consumed
        from zt_task
        where deleted = '0'
        and project != 0
        group by project
    ) as t2 on t1.id = t2.project
    left join (
        select
            tt3.project,
            count(tt3.id) as storys,
            sum(estimate) as storyestimate
        from
            (
                select
                    tt1.id,
                    tt1.estimate,
                    tt2.project
                from zt_story tt1
                    left join zt_projectstory tt2 on tt1.id = tt2.story
                where tt1.deleted = '0'
                and tt1.status = 'closed'
                and tt1.`closedReason` = 'done'
            ) tt3
        group by
            tt3.project
    ) t3 on t1.id = t3.project
    left join (
        select
            id as programid,
            name as program1
        from zt_project
        where type = 'program'
        and grade = 1
    ) t4 on t1.program1 = t4.programid;
EOT,
    'settings'  => array
    (
        'columns'     => array
        (
            array('field' => 'estimate', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'consumed', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'deviation', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'deviationrate', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'finishedstorys', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'finishedstorysmate', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'demandsizesperunittime', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow')
        ),
        'columnTotal' => 'noShow',
        'group1'      => 'topprogram',
        'group2'      => 'projectname',
        'lastStep'    => '4'
    ),
    'filters'   => array
    (
        array
        (
            'field'   => 'closeddate',
            'type'    => 'date',
            'name'    => 'Fecha de cierre',
            'default' => array('begin' => '', 'end' => '')
        )
    ),
    'fields'    => array
    (
        'projectname'            => array('object' => 'project', 'field' => 'projectname', 'type' => 'string'),
        'topprogram'             => array('object' => 'project', 'field' => 'topprogram', 'type' => 'string'),
        'estimate'               => array('object' => 'project', 'field' => 'estimate', 'type' => 'number'),
        'consumed'               => array('object' => 'project', 'field' => 'consumed', 'type' => 'number'),
        'deviation'              => array('object' => 'project', 'field' => 'deviation', 'type' => 'number'),
        'deviationrate'          => array('object' => 'project', 'field' => 'deviationrate', 'type' => 'number'),
        'finishedstorys'         => array('object' => 'project', 'field' => 'deviationrate', 'type' => 'string'),
        'finishedstorysmate'     => array('object' => 'project', 'field' => 'finishedstorysmate', 'type' => 'number'),
        'demandsizesperunittime' => array('object' => 'project', 'field' => 'demandsizesperunittime', 'type' => 'number'),
        'closeddate'             => array('object' => 'project', 'field' => 'closeddate', 'type' => 'date')
    ),
    'langs'     => array
    (
        'projectname'            => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => 'Nombre del proyecto', 'en' => 'projectname'),
        'topprogram'             => array('zh-cn' => 'Programa de primer nivel', 'zh-tw' => 'Programa de primer nivel', 'en' => 'topprogram'),
        'estimate'               => array('zh-cn' => 'Horas estimadas', 'zh-tw' => 'Horas estimadas', 'en' => 'estimate'),
        'consumed'               => array('zh-cn' => 'Horas consumidas', 'zh-tw' => 'Horas consumidas', 'en' => 'consumed'),
        'deviation'              => array('zh-cn' => 'Desviación de horas', 'zh-tw' => 'Desviación de horas', 'en' => 'deviation'),
        'deviationrate'          => array('zh-cn' => 'Tasa de desviación de horas', 'zh-tw' => 'Tasa de desviación de horas', 'en' => 'deviationrate'),
        'finishedstorys'         => array('zh-cn' => 'Historias completadas', 'zh-tw' => 'Historias completadas', 'en' => 'finishedstorys'),
        'finishedstorysmate'     => array('zh-cn' => 'Tamaño de requerimientos completados', 'zh-tw' => 'Tamaño de requerimientos completados', 'en' => 'finishedstorysmate'),
        'demandsizesperunittime' => array('zh-cn' => 'Tamaño de historias entregadas por unidad de tiempo', 'zh-tw' => 'Tamaño de historias entregadas por unidad de tiempo', 'en' => 'demandsizesperunittime'),
        'closeddate'             => array('zh-cn' => 'Fecha de cierre', 'zh-tw' => 'Fecha de cierre', 'en' => 'closeddate')
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1002,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla resumen de datos de defectos por producto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
    'code'        => 'productBugSummary',
    'dimension'   => '3',
    'driver'      => 'mysql',
    'group'       => '100',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.name as product,
    coalesce(t2.name, '/') as topprogram,
    coalesce(t3.name, '/') as productline,
    coalesce(t6.exfixedstorys, 0) as exfixedstorys,
    round(coalesce(t6.exfixedstorysmate, 0), 3) as exfixedstorysmate,
    coalesce(t8.storycases, 0) as storycases,
    round(coalesce(t8.storycases / t6.exfixedstorysmate, 0), 3) as casedensity,
    round(coalesce(t10.casestorys / t6.exfixedstorys, 0), 3) as casecoveragerate,
    coalesce(t7.bug, 0) as bugs,
    coalesce(t7.effbugs, 0) as effectivebugs,
    coalesce(t7.pri12bugs, 0) as pri12bugs,
    round(coalesce(t7.bug / t6.exfixedstorysmate, 0), 3) as bugdensity,
    coalesce(t7.fixedbugs, 0) as fixedbugs,
    round(coalesce(t7.fixedbugs / t7.bug, 0), 3) as fixedbugsrate
from zt_product as t1
    left join zt_project as t2 on t1.program = t2.id
        and t2.type = 'program'
        and t2.grade = 1
    left join zt_module as t3 on t1.line = t3.id and t3.type = 'line'
    left join (
        select
            product,
            count(id) as exfixedstorys,
            sum(estimate) as exfixedstorysmate
        from zt_story
        where deleted = '0'
        and (stage in ('developed', 'testing', 'verified', 'released') or (status = 'closed' and `closedReason` = 'done'))
        group by product
    ) as t6 on t1.id = t6.product
    left join (
        select
            product,
            count(id) as bug,
            sum(case when resolution in ('fixed', 'postponed') or status = 'active' then 1 else 0 end) as effbugs,
            sum(case when resolution = 'fixed' then 1 else 0 end) as fixedbugs,
            sum(case when severity IN (1, 2) then 1 else 0 end) as pri12bugs
        from zt_bug
        where deleted = '0'
        group by product
    ) as t7 on t1.id = t7.product
    left join (
        select
            product,
            COUNT(id) as storycases
        from zt_case
        where deleted = '0'
        group by product
    ) as t8 on t1.id = t8.product
    left join (
        select
            tcase.product,
            COUNT(tcase.story) as casestorys
        from zt_case as tcase
        left join zt_story as tstory on tcase.story = tstory.id
        where tcase.deleted = '0'
        and tcase.story != '0'
        and tstory.deleted = '0'
        and (tstory.stage IN ('developed', 'testing', 'verified', 'released') OR (tstory.status = 'closed' and tstory.`closedReason` = 'done'))
        group by tcase.product
    ) as t10 on t1.id = t10.product
where t1.deleted = '0'
and t1.status != 'closed'
and t1.vision = 'rnd'
ORDER BY t1.order;
EOT,
    'settings'  => array
    (
        'columns'     => array
        (
            array('field' => 'exfixedstorys', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'exfixedstorysmate', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'storycases', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'casedensity', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'casecoveragerate', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'bugs', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'effectivebugs', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'pri12bugs', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'bugdensity', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'fixedbugs', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow'),
            array('field' => 'fixedbugsrate', 'stat' => 'sum', 'slice' => 'noSlice', 'showMode' => 'default', 'monopolize' => '0', 'showTotal' => 'noShow')
        ),
        'columnTotal' => 'noShow',
        'group1'      => 'topprogram',
        'group2'      => 'productline',
        'group3'      => 'product',
        'lastStep'    => '4'
    ),
    'fields'    => array
    (
        'product'           => array('object' => 'story', 'field' => 'product', 'type' => 'string'),
        'topprogram'        => array('object' => 'story', 'field' => 'topprogram', 'type' => 'string'),
        'productline'       => array('object' => 'story', 'field' => 'productline', 'type' => 'string'),
        'exfixedstorys'     => array('object' => 'story', 'field' => 'exfixedstorys', 'type' => 'string'),
        'exfixedstorysmate' => array('object' => 'story', 'field' => 'exfixedstorysmate', 'type' => 'number'),
        'storycases'        => array('object' => 'story', 'field' => 'storycases', 'type' => 'string'),
        'casedensity'       => array('object' => 'story', 'field' => 'casedensity', 'type' => 'number'),
        'casecoveragerate'  => array('object' => 'story', 'field' => 'casecoveragerate', 'type' => 'number'),
        'bugs'              => array('object' => 'story', 'field' => 'bugs', 'type' => 'string'),
        'effectivebugs'     => array('object' => 'story', 'field' => 'effectviebugs', 'type' => 'number'),
        'pri12bugs'         => array('object' => 'story', 'field' => 'pri12bugs', 'type' => 'number'),
        'bugdensity'        => array('object' => 'story', 'field' => 'bugdensity', 'type' => 'number'),
        'fixedbugs'         => array('object' => 'story', 'field' => 'fixedbugs', 'type' => 'number'),
        'fixedbugsrate'     => array('object' => 'story', 'field' => 'fixedbugsrate', 'type' => 'number')
    ),
    'langs'     => array
    (
        'product'           => array('zh-cn' => 'Producto', 'zh-tw' => 'Producto', 'en' => 'product'),
        'topprogram'        => array('zh-cn' => 'Programa de primer nivel', 'zh-tw' => 'Programa de primer nivel', 'en' => 'topprogram'),
        'productline'       => array('zh-cn' => 'Línea de producto', 'zh-tw' => 'Línea de producto', 'en' => 'productline'),
        'exfixedstorys'     => array('zh-cn' => 'Requerimientos completados por desarrollo', 'zh-tw' => 'Requerimientos completados por desarrollo', 'en' => 'exfixedstorys'),
        'exfixedstorysmate' => array('zh-cn' => 'Tamaño de requerimientos completados por desarrollo', 'zh-tw' => 'Tamaño de requerimientos completados por desarrollo', 'en' => 'exfixedstorysmate'),
        'storycases'        => array('zh-cn' => 'Casos de prueba por requerimiento', 'zh-tw' => 'Casos de prueba por requerimiento', 'en' => 'storycases'),
        'casedensity'       => array('zh-cn' => 'Densidad de casos de prueba', 'zh-tw' => 'Densidad de casos de prueba', 'en' => 'casedensity'),
        'casecoveragerate'  => array('zh-cn' => 'Cobertura de casos de prueba', 'zh-tw' => 'Cobertura de casos de prueba', 'en' => 'casecoveragerate'),
        'bugs'              => array('zh-cn' => 'Bugs', 'zh-tw' => 'Bugs', 'en' => 'bugs'),
        'effectivebugs'     => array('zh-cn' => 'Bugs válidos', 'zh-tw' => 'Bugs válidos', 'en' => 'effectviebugs'),
        'pri12bugs'         => array('zh-cn' => 'Bug con prioridad 1 y 2', 'zh-tw' => 'Bug con prioridad 1 y 2', 'en' => 'pri12bugs'),
        'bugdensity'        => array('zh-cn' => 'Densidad de Bugs', 'zh-tw' => 'Densidad de Bugs', 'en' => 'bugdensity'),
        'fixedbugs'         => array('zh-cn' => 'Bugs corregidos', 'zh-tw' => 'Bugs corregidos', 'en' => 'fixedbugs'),
        'fixedbugsrate'     => array('zh-cn' => 'Tasa de corrección de Bugs', 'zh-tw' => 'Tasa de corrección de Bugs', 'en' => 'fixedbugsrate')
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1003,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de entrega de requerimientos por producto', 'zh-tw' => 'Tabla de avance de finalización por producto', 'en' => 'Product Progress', 'de' => 'Product Progress', 'fr' => 'Product Progress'),
    'code'        => 'productProgress',
    'desc'        => array('zh-cn' => 'Lista por producto el total de requerimientos y el total de requerimientos entregados (con estado Cerrado y motivo de cierre Completado, o con etapa de desarrollo Lanzada).', 'zh-tw' => 'Lista por producto el total de requerimientos, el total de completados (estado Cerrado, o etapa de desarrollo Lanzada) y el porcentaje de finalización.', 'en' => 'Number of total stories,done stories(state is closed, or stage is released), percent of completion.', 'de' => 'Number of total stories,done stories(state is closed, or stage is released), percent of completion.', 'fr' => 'Number of total stories,done stories(state is closed, or stage is released), percent of completion.'),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '59',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.product,
    t2.name,
    (case when t1.`closedReason` = 'done' or t1.stage = 'released' then 1=1 else 1=0 end) as done,
    1 as count from zt_story as t1
left join zt_product as t2 on t1.product=t2.id
left join zt_project as t3 on t2.program=t3.id
where t1.deleted='0'
and t2.deleted='0'
and t2.shadow='0'
and (case when \$productStatus='' then 1=1 else t2.status=\$productStatus end)
and (case when \$productType='' then 1=1 else t2.type=\$productType end)
and (case when \$product='0' then 1=1 else t2.id=\$product end)
order by t3.`order` asc, t2.line desc, t2.`order` asc
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'group1'      => 'product',
        'columns'     => array
        (
            array('field' => 'done', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'count', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'productStatus', 'name' => 'Estado del producto', 'type' => 'select', 'typeOption' => 'product.status', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'productType', 'name' => 'Tipo de producto', 'type' => 'select', 'typeOption' => 'product.type', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'product', 'name' => 'Lista de productos', 'type' => 'select', 'typeOption' => 'product', 'default' => '0')
    ),
    'fields'    => array
    (
        'product' => array('object' => 'product', 'field' => 'name', 'type' => 'object'),
        'name'    => array('object' => 'product', 'field' => 'name', 'type' => 'string'),
        'done'    => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'count'   => array('object' => 'project', 'field' => '', 'type' => 'number')
    ),
    'langs'     => array
    (
        'product' => array('zh-cn' => 'Nombre del producto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'name'    => array('zh-cn' => 'name', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'done'    => array('zh-cn' => 'Historias entregadas', 'zh-tw' => 'Historias entregadas', 'en' => 'delivery', 'de' => '', 'fr' => ''),
        'count'   => array('zh-cn' => 'Historias', 'zh-tw' => 'Historias', 'en' => 'Stories', 'de' => '', 'fr' => '')
    ),
    'vars'      => array(),
    'drills'    => array
    (
        array
        (
            'field'     => 'done',
            'object'    => 'story',
            'whereSql'  => "WHERE t1.deleted='0'  and t1.`closedReason` = 'done' or t1.stage = 'released'",
            'condition' => array
            (
                array('drillObject' => 'zt_story', 'drillAlias' => 't1', 'drillField' => 'product', 'queryField' => 'product')
            )
        ),
        array
        (
            'field'     => 'count',
            'object'    => 'story',
            'whereSql'  => "WHERE t1.deleted='0' ",
            'condition' => array
            (
                array('drillObject' => 'zt_story', 'drillAlias' => 't1', 'drillField' => 'product', 'queryField' => 'product')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1004,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de distribución de estados de requerimientos por producto', 'zh-tw' => 'Tabla de distribución de estados de requerimientos por producto', 'en' => 'Story Status', 'de' => 'Story Status', 'fr' => 'Story Status'),
    'code'        => 'productStoryStatus',
    'desc'        => array('zh-cn' => 'Lista por producto el total de requerimientos y la distribución de sus estados.', 'zh-tw' => 'Lista por producto el total de requerimientos y la distribución de sus estados.', 'en' => 'Total number and status distribution of stories.', 'de' => 'Total number and status distribution of stories.', 'fr' => 'Total number and status distribution of stories.'),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '59',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.product, t1.status,
    t2.name
from zt_story as t1
left join zt_product as t2 on t1.product=t2.id
left join zt_project as t3 on t2.program=t3.id
where t1.deleted='0'
and t2.deleted='0'
and t2.shadow='0'
and (case when \$productStatus='' then 1=1 else t2.status=\$productStatus end)
and (case when \$productType='' then 1=1 else t2.type=\$productType end)
and (case when \$product='0' then 1=1 else t2.id=\$product end)
order by t3.`order` asc, t2.line desc, t2.`order` asc
EOT,
    'settings'  => array
    (
        'group1'      => 'product',
        'columnTotal' => 'sum',
        'columns'     => array
        (
            array('field' => 'status', 'slice' => 'status', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => '0', 'showOrigin' => 0, 'summary' => 'use')
        )
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'productStatus', 'name' => 'Estado del producto', 'type' => 'select', 'typeOption' => 'product.status', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'productType', 'name' => 'Tipo de producto', 'type' => 'select', 'typeOption' => 'product.type', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'product', 'name' => 'Lista de productos', 'type' => 'select', 'typeOption' => 'product', 'default' => '0')
    ),
    'fields'    => array
    (
        'product' => array('object' => 'product', 'field' => 'name', 'type' => 'object'),
        'status'  => array('object' => 'story', 'field' => 'status', 'type' => 'option'),
        'name'    => array('object' => 'product', 'field' => 'name', 'type' => 'string')
    ),
    'langs'     => array
    (
        'product'          => array('zh-cn' => 'Nombre del producto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'status'           => array('zh-cn' => 'Requerimientos por estado', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'name'             => array('zh-cn' => 'name', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array(),
    'drills'    => array
    (
        array
        (
            'field'     => 'status',
            'object'    => 'story',
            'whereSql'  => "WHERE t1.deleted='0' ",
            'condition' => array
            (
                array('drillObject' => 'zt_story', 'drillAlias' => 't1', 'drillField' => 'product', 'queryField' => 'product'),
                array('drillObject' => 'zt_story', 'drillAlias' => 't1', 'drillField' => 'status', 'queryField' => 'status')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1005,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de distribución de etapas de requerimientos por producto', 'zh-tw' => 'Tabla de distribución de etapas de requerimientos por producto', 'en' => 'Story Stage', 'de' => 'Story Stage', 'fr' => 'Story Stage'),
    'code'        => 'productStoryStage',
    'desc'        => array('zh-cn' => 'Lista por producto el total de requerimientos y la distribución de sus etapas de desarrollo.', 'zh-tw' => 'Lista por producto el total de requerimientos y la distribución de sus etapas de desarrollo.', 'en' => 'Total number and stage distribution of stories ', 'de' => 'Total number and stage distribution of stories ', 'fr' => 'Total number and stage distribution of stories '),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '59',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.product, t1.stage,
    t2.name
from zt_story as t1
left join zt_product as t2 on t1.product=t2.id
left join zt_project as t3 on t2.program=t3.id
where t1.deleted='0'
and t2.deleted='0'
and t2.shadow='0'
and (case when \$productStatus='' then 1=1 else t2.status=\$productStatus end)
and (case when \$productType='' then 1=1 else t2.type=\$productType end)
and (case when \$product='0' then 1=1 else t2.id=\$product end)
order by t3.`order` asc, t2.line desc, t2.`order` asc
EOT,
    'settings'  => array
    (
        'group1'      => 'product',
        'columnTotal' => 'sum',
        'columns'     => array
        (
            array('field' => 'stage', 'slice' => 'stage', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => '0', 'showOrigin' => 0)
        ),
        'summary'     => 'use'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'productStatus', 'name' => 'Estado del producto', 'type' => 'select', 'typeOption' => 'product.status', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'productType', 'name' => 'Tipo de producto', 'type' => 'select', 'typeOption' => 'product.type', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'product', 'name' => 'Lista de productos', 'type' => 'select', 'typeOption' => 'product', 'default' => '0')
    ),
    'fields'    => array
    (
        'product'          => array('object' => 'product', 'field' => 'name', 'type' => 'object'),
        'stage'            => array('object' => 'story', 'field' => 'stage', 'type' => 'option'),
        'name'             => array('object' => 'product', 'field' => 'name', 'type' => 'string')
    ),
    'langs'     => array
    (
        'product'          => array('zh-cn' => 'Nombre del producto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'stage'            => array('zh-cn' => 'Requerimientos por etapa', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'name'             => array('zh-cn' => 'name', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array(),
    'drills'    => array
    (
        array
        (
            'field'     => 'stage',
            'object'    => 'story',
            'whereSql'  => "WHERE t1.deleted='0' ",
            'condition' => array
            (
                array('drillObject' => 'zt_story', 'drillAlias' => 't1', 'drillField' => 'product', 'queryField' => 'product'),
                array('drillObject' => 'zt_story', 'drillAlias' => 't1', 'drillField' => 'stage', 'queryField' => 'stage')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1006,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de cantidad de lanzamientos por producto', 'zh-tw' => 'Tabla de cantidad de lanzamientos por producto', 'en' => 'Product Release', 'de' => 'Product Release', 'fr' => 'Product Release'),
    'code'        => 'productRelease',
    'desc'        => array('zh-cn' => 'Lista por producto la cantidad de lanzamientos.', 'zh-tw' => 'Lista por producto la cantidad de lanzamientos.', 'en' => 'Product Release.', 'de' => 'Product Release.', 'fr' => 'Product Release.'),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '59',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.product,
    t2.name,
    1 as releases
from zt_release as t1
left join zt_product as t2 on t1.product=t2.id
left join zt_project as t3 on t2.program=t3.id
where t1.deleted='0'
and t2.deleted='0'
and t2.shadow='0'
and (case when \$productStatus='' then 1=1 else t2.status=\$productStatus end)
and (case when \$productType='' then 1=1 else t2.type=\$productType end)
and (case when \$product='0' then 1=1 else t2.id=\$product end)
order by t3.`order` asc, t2.line desc, t2.`order` asc
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'group1'      => 'product',
        'columns'     => array
        (
            array('field' => 'releases', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'productStatus', 'name' => 'Estado del producto', 'type' => 'select', 'typeOption' => 'product.status', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'productType', 'name' => 'Tipo de producto', 'type' => 'select', 'typeOption' => 'product.type', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'product', 'name' => 'Lista de productos', 'type' => 'select', 'typeOption' => 'product', 'default' => '0')
    ),
    'fields'    => array
    (
        'product'  => array('object' => 'product', 'field' => 'name', 'type' => 'object'),
        'name'     => array('object' => 'product', 'field' => 'name', 'type' => 'string'),
        'releases' => array('object' => 'product', 'field' => '', 'type' => 'number')
    ),
    'langs'     => array
    (
        'product'  => array('zh-cn' => 'Nombre del producto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'name'     => array('zh-cn' => 'Nombre del producto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'releases' => array('zh-cn' => 'Lanzamiento', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array(),
    'drills'    => array
    (
        array
        (
            'field'     => 'releases',
            'object'    => 'release',
            'whereSql'  => "WHERE t1.deleted='0' ",
            'condition' => array
            (
                array('drillObject' => 'zt_release', 'drillAlias' => 't1', 'drillField' => 'product', 'queryField' => 'product')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1007,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de estadísticas de estado de tareas', 'zh-tw' => 'Tabla de estadísticas de estado de tareas', 'en' => 'Task Status Report', 'de' => 'Task Status Report', 'fr' => 'Task Status Report', 'vi' => 'Task Status Report', 'ja' => 'Task Status Report'),
    'code'        => 'taskStatus',
    'desc'        => array('zh-cn' => 'Muestra la distribución del estado de las tareas por ejecución.', 'zh-tw' => 'Muestra la distribución del estado de las tareas por ejecución.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.project,
    t3.name as projectname,
    t2.status,
    t1.name as executionname,
    t1.status as executionstatus,
    t2.execution as execution,
    t2.id as `taskID`,
    (case when cast(t2.deadline as date) < current_date
         and t2.deadline is not null
         and t2.status != 'closed'
         and t2.status != 'done'
         and t2.status != 'cancel' then 1 else 0 end
     ) as timeout
from zt_project as t1
left join zt_task as t2 on t1.id=t2.execution
left join zt_project as t3 on t3.id=t1.project
where t1.deleted='0'
and t1.type in ('sprint','stage')
and t2.deleted='0'
and (case when \$projectStatus='' then 1=1 else t3.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t3.id=\$project end)
and (case when \$execution='0' then 1=1 else t1.id=\$execution end)
and (case when \$beginDate='' then 1=1 else t1.begin>=cast(\$beginDate as date) end)
and (case when \$endDate='' then 1=1 else t1.end<=cast(\$endDate as date) end)
and not (\$projectStatus='' and \$executionStatus='' and \$project='0' and \$beginDate='' and \$endDate='')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'taskID', 'slice' => 'status', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'projectname',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus', 'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0'),
        array('from' => 'query', 'field' => 'beginDate', 'name' => 'Fecha de inicio de la ejecución', 'type' => 'date', 'typeOption' => '', 'default' => '$MONDAY'),
        array('from' => 'query', 'field' => 'endDate', 'name' => 'Fecha de fin de la ejecución', 'type' => 'date', 'typeOption' => '', 'default' => '$SUNDAY')
    ),
    'fields'    => array
    (
        'project'         => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'projectname'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'status'          => array('object' => 'task', 'field' => 'status', 'type' => 'option'),
        'executionname'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'execution'       => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'taskID'          => array('object' => 'task', 'field' => '', 'type' => 'object'),
        'executionstatus' => array('object' => 'task', 'field' => '', 'type' => 'object'),
        'timeout'         => array('object' => 'task', 'field' => '', 'type' => 'number')
    ),
    'langs'     => array
    (
        'project'         => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectname'     => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'status'          => array('zh-cn' => 'Estado de la tarea', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname'   => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'       => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'taskID'          => array('zh-cn' => 'Tareas por estado', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionstatus' => array('zh-cn' => 'executionstatus', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'timeout'         => array('zh-cn' => 'timeout', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('projectStatus', 'executionStatus', 'project', 'execution', 'beginDate', 'endDate'),
        'showName'    => array('Lista de proyectos', 'Lista de ejecuciones', 'Estado del proyecto', 'Estado de la ejecución', 'Fecha de inicio de la ejecución', 'Fecha de fin de la ejecución'),
        'requestType' => array('select', 'select','select', 'select', 'date', 'date'),
        'selectList'  => array('project.status', 'execution.status', 'project', 'execution', '', ''),
        'default'     => array('doing', 'doing', '', '', '$MONTHBEGIN', '$MONTHEND')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'taskID',
            'object'    => 'task',
            'whereSql'  => "left join zt_project t2 on t1.execution=t2.id left join zt_project as t3 on t3.id=t2.project WHERE t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname'),
                array('drillObject' => 'zt_task', 'drillAlias' => 't1', 'drillField' => 'status', 'queryField' => 'status')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1008,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de estadísticas de tipo de tarea', 'zh-tw' => 'Tabla de estadísticas de tipo de tarea', 'en' => 'Task Type Report', 'de' => 'Task Type Report', 'fr' => 'Task Type Report', 'vi' => 'Task Type Report', 'ja' => 'Task Type Report'),
    'code'        => 'taskType',
    'desc'        => array('zh-cn' => 'Muestra la distribución del tipo de las tareas por proyecto.', 'zh-tw' => 'Muestra la distribución del tipo de las tareas por proyecto.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.id,
    t3.name as projectname,
    t3.id as project,
    t1.name as executionname,
    t1.status as executionstatus,
    t1.id as execution,
    t2.type,
    t2.id as `taskID`
from zt_project as t1
left join zt_task as t2 on t1.id=t2.execution
left join zt_project as t3 on t3.id=t1.project
where t1.deleted='0'
and t1.type in ('sprint','stage')
and t2.deleted='0'
and (case when \$projectStatus='' then 1=1 else t3.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t3.id=\$project end)
and (case when \$execution='0' then 1=1 else t1.id=\$execution end)
and (case when \$beginDate='' then 1=1 else t1.begin>=cast(\$beginDate as date) end)
and (case when \$endDate='' then 1=1 else t1.end<=cast(\$endDate as date) end)
and not (\$projectStatus='' and \$executionStatus='' and \$project='0' and \$beginDate='' and \$endDate='')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'taskID', 'slice' => 'type', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'projectname',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus', 'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0'),
        array('from' => 'query', 'field' => 'beginDate', 'name' => 'Fecha de inicio de la ejecución', 'type' => 'date', 'typeOption' => '', 'default' => '$MONDAY'),
        array('from' => 'query', 'field' => 'endDate', 'name' => 'Fecha de fin de la ejecución', 'type' => 'date', 'typeOption' => '', 'default' => '$SUNDAY')
    ),
    'fields'    => array
    (
        'id'              => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'projectname'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'project'         => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'executionname'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'execution'       => array('object' => 'project', 'field' => 'name', 'type' => 'object'),
        'type'            => array('object' => 'task', 'field' => 'type', 'type' => 'option'),
        'taskID'          => array('object' => 'task', 'field' => '', 'type' => 'object'),
        'executionstatus' => array('object' => 'task', 'field' => '', 'type' => 'object')
    ),
    'langs'     => array
    (
        'id'              => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectname'     => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'project'         => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname'   => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'       => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'type'            => array('zh-cn' => 'Tipo de tarea', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'taskID'          => array('zh-cn' => 'Tareas por tipo', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionstatus' => array('zh-cn' => 'executionstatus', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('projectStatus', 'executionStatus', 'project', 'execution', 'beginDate', 'endDate'),
        'showName'    => array('Estado del proyecto', 'Estado de la ejecución', 'Lista de proyectos', 'Lista de ejecuciones', 'Fecha de inicio de la ejecución', 'Fecha de fin de la ejecución'),
        'requestType' => array('select', 'select', 'select', 'select', 'date', 'date'),
        'selectList'  => array('project.status', 'execution.status', 'project', 'execution', 'user', 'user'),
        'default'     => array('doing', 'doing', '', '', '$MONTHBEGIN', '$MONTHEND')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'taskID',
            'object'    => 'task',
            'whereSql'  => "left join zt_project t2 on t1.execution=t2.id left join zt_project as t3 on t3.id=t2.project WHERE t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname'),
                array('drillObject' => 'zt_task', 'drillAlias' => 't1', 'drillField' => 'type', 'queryField' => 'type')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1009,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de asignación de tareas por proyecto', 'zh-tw' => 'Tabla de asignación de tareas por proyecto', 'en' => 'Task Assign Report', 'de' => 'Task Assign Report', 'fr' => 'Task Assign Report', 'vi' => 'Task Assign Report', 'ja' => 'Task Assign Report'),
    'code'        => 'projectTaskAssign',
    'desc'        => array('zh-cn' => 'Muestra la distribución de las tareas según a quién están asignadas, por proyecto.', 'zh-tw' => 'Muestra la distribución de las tareas según a quién están asignadas, por proyecto.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.id,
    t4.name as projectname,
    t4.id as project,
    t1.name as executionname,
    t2.execution as execution,
    (case when t3.account is not null then t3.account else t2.`assignedTo` end) as `assignedTo`,
    t2.id as `taskID`,
    t1.status as executionstatus
from zt_project as t1
left join zt_task as t2 on t1.id=t2.execution
left join zt_team as t3 on t3.type='task' and t3.root=t2.id
left join zt_project as t4 on t1.project=t4.id
where t1.deleted='0'
and t1.type in ('sprint','stage')
and t2.deleted='0'
and (case when \$projectStatus='' then 1=1 else t4.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t4.id=\$project end)
and (case when \$execution='0' then 1=1 else t1.id=\$execution end)
and (case when \$beginDate='' then 1=1 else t1.begin>=cast(\$beginDate as date) end)
and (case when \$endDate='' then 1=1 else t1.end<=cast(\$endDate as date) end)
and not (\$projectStatus='' and \$executionStatus='' and \$project='0' and \$beginDate='' and \$endDate = '')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'taskID', 'slice' => 'assignedTo', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'projectname',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus', 'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0'),
        array('from' => 'query', 'field' => 'beginDate', 'name' => 'Fecha de inicio de la ejecución', 'type' => 'date', 'typeOption' => '', 'default' => '$MONDAY'),
        array('from' => 'query', 'field' => 'endDate', 'name' => 'Fecha de fin de la ejecución', 'type' => 'date', 'typeOption' => '', 'default' => '$SUNDAY')
    ),
    'fields'    => array
    (
        'id'              => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'projectname'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'project'         => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'executionname'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'execution'       => array('object' => 'project', 'field' => 'name', 'type' => 'object'),
        'assignedTo'      => array('object' => 'task', 'field' => 'assignedTo', 'type' => 'user'),
        'taskID'          => array('object' => 'team', 'field' => '', 'type' => 'number'),
        'executionstatus' => array('object' => 'project', 'field' => 'status', 'type' => 'option')
    ),
    'langs'     => array
    (
        'id'              => array('zh-cn' => 'id', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectname'     => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'project'         => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname'   => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'       => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'assignedTo'      => array('zh-cn' => 'Asignado a', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'taskID'          => array('zh-cn' => 'Tareas asignadas a personas', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionstatus' => array('zh-cn' => 'executionstatus', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('projectStatus', 'executionStatus', 'project', 'execution', 'beginDate', 'endDate'),
        'showName'    => array('Estado del proyecto', 'Estado de la ejecución', 'Lista de proyectos', 'Lista de ejecuciones', 'Fecha de inicio de la ejecución', 'Fecha de fin de la ejecución'),
        'requestType' => array('select', 'select', 'select', 'select', 'date', 'date'),
        'selectList'  => array('project.status', 'execution.status', 'project', 'execution', 'user', 'user'),
        'default'     => array('doing', 'doing', '', '', '$MONTHBEGIN', '$MONTHEND')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'taskID',
            'object'    => 'task',
            'whereSql'  => "left join zt_project t2 on t1.execution=t2.id left join zt_project as t3 on t2.project=t3.id WHERE t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname'),
                array('drillObject' => 'zt_task', 'drillAlias' => 't1', 'drillField' => 'assignedTo', 'queryField' => 'assignedTo')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1010,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de finalizadores de tareas por proyecto', 'zh-tw' => 'Tabla de finalizadores de tareas por proyecto', 'en' => 'Task Finish Report', 'de' => 'Task Finish Report', 'fr' => 'Task Finish Report', 'vi' => 'Task Finish Report', 'ja' => 'Task Finish Report'),
    'code'        => 'projectTaskFinished',
    'desc'        => array('zh-cn' => 'Muestra la distribución de las tareas según quién las completó, por proyecto.', 'zh-tw' => 'Muestra la distribución de las tareas según quién las completó, por proyecto.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
 t1.id,
 t3.name as projectname,
 t3.id as project,
 t1.name as executionname,
 t2.execution as execution,
 t2.`finishedBy`,
 t2.id as `taskID`,
 t1.status as executionstatus
from zt_project as t1
left join zt_task as t2 on t1.id=t2.execution
left join zt_project as t3 on t1.project=t3.id
left join zt_user as t4 on t2.`finishedBy`=t4.account
where t1.deleted='0'
and t1.type in ('sprint','stage')
and t2.deleted='0'
and t2.`finishedBy`!=''
and (case when \$projectStatus='' then 1=1 else t3.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t3.id=\$project end)
and (case when \$dept='' then 1=1 else t4.dept=\$dept end)
and (case when \$user='' then 1=1 else t2.`finishedBy`=\$user end)
and not (\$projectStatus='' and \$executionStatus='' and \$project='0' and \$execution='0' and \$dept='' and \$user='')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'taskID', 'slice' => 'finishedBy', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'projectname',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus', 'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0'),
        array('from' => 'query', 'field' => 'dept', 'name' => 'Departamento del finalizador', 'type' => 'select', 'typeOption' => 'dept', 'default' => '0'),
        array('from' => 'query', 'field' => 'user', 'name' => 'Finalizador', 'type' => 'select', 'typeOption' => 'user', 'default' => '0')
    ),
    'fields'    => array
    (
        'id'              => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'projectname'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'project'         => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'executionname'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'execution'       => array('object' => 'project', 'field' => 'name', 'type' => 'object'),
        'finishedBy'      => array('object' => 'task', 'field' => 'finishedBy', 'type' => 'user'),
        'taskID'          => array('object' => 'task', 'field' => '', 'type' => 'number'),
        'executionstatus' => array('object' => 'task', 'field' => '', 'type' => 'string')
    ),
    'langs'     => array
    (
        'id'              => array('zh-cn' => 'id', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectname'     => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'project'         => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname'   => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'       => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'finishedBy'      => array('zh-cn' => 'Completado por', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'taskID'          => array('zh-cn' => 'Tareas completadas por cada finalizador', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionstatus' => array('zh-cn' => 'executionstatus', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('projectStatus', 'executionStatus', 'project', 'execution', 'beginDate', 'endDate'),
        'showName'    => array('Estado del proyecto', 'Estado de la ejecución', 'Lista de proyectos', 'Lista de ejecuciones', 'Fecha de inicio de la ejecución', 'Fecha de fin de la ejecución'),
        'requestType' => array('select', 'select', 'select', 'select', 'date', 'date'),
        'selectList'  => array('project.status', 'execution.status', 'project', 'execution', 'user', 'user'),
        'default'     => array('doing', 'doing', '', '', '$MONTHBEGIN', '$MONTHEND')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'taskID',
            'object'    => 'task',
            'whereSql'  => "left join zt_project t2 on t1.execution=t2.id left join zt_user t3 on t1.`finishedBy`=t3.account WHERE t1.deleted='0' AND t1.`finishedBy`!=''",
            'condition' => array
            (
                array('drillObject' => 'zt_task', 'drillAlias' => 't1', 'drillField' => 'finishedBy', 'queryField' => 'finishedBy'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1011,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de estadísticas de inversión por proyecto', 'zh-tw' => 'Tabla de estadísticas de inversión por proyecto', 'en' => 'Project Invest Report', 'de' => 'Project Invest Report', 'fr' => 'Project Invest Report', 'vi' => 'Project Invest Report', 'ja' => 'Project Invest Report'),
    'code'        => 'projectInvested',
    'desc'        => array('zh-cn' => 'Lista por proyecto: cantidad de tareas, cantidad de requerimientos, cantidad de personas y total de horas consumidas.', 'zh-tw' => 'Lista por proyecto: cantidad de tareas, cantidad de requerimientos, cantidad de personas y total de horas consumidas.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.id,
    t5.name as projectname,
    t5.id as project,
    t1.name as executionname,
    t2.execution as execution,
    concat(t1.begin,' ~ ',t1.end) as timeLimit,
    t2.teams,
    t3.stories,
    round(t4.consumed,1) as consumed,
    t4.number,
    t1.status as executionstatus
from zt_project as t1
left join ztv_projectteams as t2 on t1.id=t2.execution
left join ztv_projectstories as t3 on t1.id=t3.execution
left join ztv_executionsummary as t4 on t1.id=t4.execution
left join zt_project as t5 on t1.project=t5.id
where t1.deleted='0'
and t1.type in ('sprint','stage')
and (case when \$projectStatus='' then 1=1 else t5.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t5.id=\$project end)
and (case when \$beginDate='' then 1=1 else t1.begin>=cast(\$beginDate as date) end)
and (case when \$endDate='' then 1=1 else t1.end<=cast(\$endDate as date) end)
and not (\$projectStatus='' and \$executionStatus='' and \$project='0' and \$beginDate='' and \$endDate='')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'number', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'stories', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'teams', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'consumed', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'projectname',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus', 'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'beginDate', 'name' => 'Fecha de inicio de la ejecución', 'type' => 'date', 'typeOption' => '', 'default' => '$MONDAY'),
        array('from' => 'query', 'field' => 'endDate', 'name' => 'Fecha de fin de la ejecución', 'type' => 'date', 'typeOption' => '', 'default' => '$SUNDAY')
    ),
    'fields'    => array
    (
        'id'              => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'projectname'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'project'         => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'executionname'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'execution'       => array('object' => 'project', 'field' => 'name', 'type' => 'object'),
        'timeLimit'       => array('object' => 'project', 'field' => '', 'type' => 'string'),
        'teams'           => array('object' => 'project', 'field' => '', 'type' => 'string'),
        'stories'         => array('object' => 'project', 'field' => '', 'type' => 'string'),
        'consumed'        => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'number'          => array('object' => 'project', 'field' => '', 'type' => 'string'),
        'executionstatus' => array('object' => 'project', 'field' => '', 'type' => 'object')
    ),
    'langs'     => array
    (
        'id'              => array('zh-cn' => 'id', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectname'     => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'project'         => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname'   => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'       => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'timeLimit'       => array('zh-cn' => 'Duración', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'teams'           => array('zh-cn' => 'Personas', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'stories'         => array('zh-cn' => 'Historias', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'consumed'        => array('zh-cn' => 'Total consumido', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'number'          => array('zh-cn' => 'Tareas', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionstatus' => array('zh-cn' => 'executionstatus', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('projectStatus', 'executionStatus', 'project', 'beginDate', 'endDate'),
        'showName'    => array('Estado del proyecto', 'Estado de la ejecución', 'Lista de proyectos', 'Fecha de inicio de la ejecución', 'Fecha de fin de la ejecución'),
        'requestType' => array('select', 'select', 'select', 'date', 'date'),
        'selectList'  => array('project.status', 'execution.status', 'project', '', ''),
        'default'     => array('doing', 'doing', '', '$WEEKBEGIN', '$WEEKEND')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'number',
            'object'    => 'task',
            'whereSql'  => "left join zt_project as t2 on t1.execution=t2.id left join zt_project as t3 on t2.project=t3.id  where t1.deleted='0' and t2.deleted='0' and t2.type in ('sprint','stage')",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'stories',
            'object'    => 'story',
            'whereSql'  => "right join zt_projectstory as t2 on t2.story=t1.id left join zt_project as t3 on t2.project=t3.id  left join zt_project as t4 on t4.id=t3.project  where t3.deleted='0' and t3.type in('sprint', 'stage')  and t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't4', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'teams',
            'object'    => 'user',
            'whereSql'  => "left join zt_team t2 on t1.account=t2.account left join zt_project t3 on t2.root=t3.id left join zt_project t4 on t3.project=t4.id where t2.type ='execution' and t3.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't4', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'consumed',
            'object'    => 'task',
            'whereSql'  => "left join zt_project as t2 on t1.execution=t2.id left join zt_project as t3 on t2.project=t3.id  where t1.deleted='0' and t2.deleted='0' and t2.type in ('sprint','stage') and t1.parent>='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1012,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de distribución de estados de requerimientos por proyecto', 'zh-tw' => 'Tabla de distribución de estados de requerimientos por proyecto', 'en' => 'Project Story Status', 'de' => 'Project Story Status', 'fr' => 'Project Story Status', 'vi' => 'Project Story Status', 'ja' => 'Project Story Status'),
    'code'        => 'projectStoryStatus',
    'desc'        => array('zh-cn' => 'Muestra la distribución del estado de los requerimientos por proyecto.', 'zh-tw' => 'Muestra la distribución del estado de los requerimientos por proyecto.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t2.id,
    t4.name as projectname,
    t4.id as project,
    t2.name as executionname,
    t2.id as execution,
    t3.status
from zt_projectstory as t1
left join zt_project as t2 on t1.project=t2.id
left join zt_story as t3 on t1.story=t3.id
left join zt_project as t4 on t4.id=t2.project
where t2.deleted='0' and t3.deleted='0'
and t2.type in('sprint', 'stage')
and (case when \$projectStatus='' then 1=1 else t4.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t2.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t4.id=\$project end)
and (case when \$execution='0' then 1=1 else t2.id=\$execution end)
and not (\$projectStatus='' and \$executionStatus='' and \$project='0' and \$execution='0')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'status', 'slice' => 'status', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'projectname',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus', 'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0')
    ),
    'fields'    => array
    (
        'id'            => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'projectname'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'project'       => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'executionname' => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'execution'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'status'        => array('object' => 'story', 'field' => 'status', 'type' => 'option')
    ),
    'langs'     => array
    (
        'id'            => array('zh-cn' => 'id', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectname'   => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'project'       => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname' => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'     => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'status'        => array('zh-cn' => 'Requerimientos por estado', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('projectStatus', 'executionStatus', 'project', 'execution'),
        'showName'    => array('Estado del proyecto', 'Estado de la ejecución', 'Lista de proyectos', 'Lista de ejecuciones'),
        'requestType' => array('select', 'select', 'select', 'select'),
        'selectList'  => array('project.status', 'execution.status', 'project', 'execution'),
        'default'     => array('doing', 'doing', '', '')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'status',
            'object'    => 'story',
            'whereSql'  => "right join zt_projectstory as t2 on t2.story=t1.id left join zt_project as t3 on t2.project=t3.id  left join zt_project as t4 on t4.id=t3.project  where t3.deleted='0' and t3.type in('sprint', 'stage')  and t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't4', 'drillField' => 'name', 'queryField' => 'projectname'),
                array('drillObject' => 'zt_story', 'drillAlias' => 't1', 'drillField' => 'status', 'queryField' => 'status')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1013,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de distribución de etapas de requerimientos por proyecto', 'zh-tw' => 'Tabla de distribución de etapas de requerimientos por proyecto', 'en' => 'Project Stage Report', 'de' => 'Project Stage Report', 'fr' => 'Project Stage Report', 'vi' => 'Project Stage Report', 'ja' => 'Project Stage Report'),
    'code'        => 'projectStoryStage',
    'desc'        => array('zh-cn' => 'Muestra la distribución de las etapas de los requerimientos por proyecto.', 'zh-tw' => 'Muestra la distribución de las etapas de los requerimientos por proyecto.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t2.id,
    t4.name as projectname,
    t4.id as project,
    t2.name as executionname,
    t2.id as execution,
    t3.stage
from zt_projectstory as t1
left join zt_project as t2 on t1.project=t2.id
left join zt_story as t3 on t1.story=t3.id
left join zt_project as t4 on t4.id=t2.project
where t2.deleted='0' and t3.deleted='0'
and t2.type in('sprint', 'stage')
and (case when \$projectStatus='' then 1=1 else t4.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t2.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t4.id=\$project end)
and (case when \$execution='0' then 1=1 else t2.id=\$execution end)
and not (\$projectStatus='' and \$executionStatus='' and \$project='0' and \$execution='0')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'stage', 'slice' => 'stage', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'projectname',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus', 'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0')
    ),
    'fields'    => array
    (
        'id'            => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'projectname'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'project'       => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'executionname' => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'execution'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'stage'         => array('object' => 'story', 'field' => 'stage', 'type' => 'option')
    ),
    'langs'     => array
    (
        'id'            => array('zh-cn' => 'id', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectname'   => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'project'       => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname' => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'     => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'stage'         => array('zh-cn' => 'Requerimientos por etapa', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('projectStatus', 'executionStatus', 'project', 'execution'),
        'showName'    => array('Estado del proyecto', 'Estado de la ejecución', 'Lista de proyectos', 'Lista de ejecuciones'),
        'requestType' => array('select', 'select', 'select', 'select'),
        'selectList'  => array('project.status', 'execution.status', 'project', 'execution'),
        'default'     => array('doing', 'doing', '', '')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'stage',
            'object'    => 'story',
            'whereSql'  => "right join zt_projectstory as t2 on t2.story=t1.id left join zt_project as t3 on t2.project=t3.id  left join zt_project as t4 on t4.id=t3.project  where t3.deleted='0' and t3.type in('sprint', 'stage')  and t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't4', 'drillField' => 'name', 'queryField' => 'projectname'),
                array('drillObject' => 'zt_story', 'drillAlias' => 't1', 'drillField' => 'stage', 'queryField' => 'stage')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1014,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de distribución de soluciones de Bug por proyecto', 'zh-tw' => 'Tabla de distribución de soluciones de Bug por proyecto', 'en' => 'Project Bug Resolution', 'de' => 'Project Bug Resolution', 'fr' => 'Project Bug Resolution', 'vi' => 'Project Bug Resolution', 'ja' => 'Project Bug Resolution'),
    'code'        => 'projectBugResolution',
    'desc'        => array('zh-cn' => 'Muestra la distribución de las soluciones de los Bug por proyecto.', 'zh-tw' => 'Muestra la distribución de las soluciones de los Bug por proyecto.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60,61',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.id,
    t3.name as project,
    t3.id as projectID,
    t1.id as execution,
    t1.name as executionname,
    t2.id as bugID,
    t2.resolution
from zt_project as t1
left join zt_bug as t2 on t1.id=t2.execution
left join zt_project as t3 on t3.id=t1.project
where t1.deleted='0'
and t2.deleted='0'
and t2.resolution!=''
and (case when \$projectStatus='' then 1=1 else t3.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t3.id=\$project end)
and (case when \$execution='0' then 1=1 else t1.id=\$execution end)
and not (\$projectStatus='' and \$executionStatus='' and \$project='0' and \$execution='0')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'resolution', 'slice' => 'resolution', 'stat' => 'count', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'project',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus', 'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0')
    ),
    'fields'    => array
    (
        'id'            => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'project'       => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'projectID'     => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'execution'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'executionname' => array('object' => 'bug', 'field' => '', 'type' => 'string'),
        'bugID'         => array('object' => 'bug', 'field' => '', 'type' => 'number'),
        'resolution'    => array('object' => 'bug', 'field' => 'resolution', 'type' => 'option')
    ),
    'langs'     => array
    (
        'id'            => array('zh-cn' => 'Proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'project'       => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectID'     => array('zh-cn' => 'Ejecutar', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'     => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname' => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'bugID'         => array('zh-cn' => 'bugID', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'resolution'    => array('zh-cn' => 'Solución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('projectStatus', 'executionStatus', 'project', 'execution'),
        'showName'    => array('Estado del proyecto', 'Estado de la ejecución', 'Lista de proyectos', 'Lista de ejecuciones'),
        'requestType' => array('select', 'select', 'select', 'select'),
        'selectList'  => array('project.status', 'execution.status', 'project', 'execution'),
        'default'     => array('doing', 'doing', '', '')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'resolution',
            'object'    => 'bug',
            'whereSql'  => "left join zt_project as t2 on t1.execution=t2.id left join zt_project as t3 on t3.id=t2.project  where t1.deleted='0' and t2.deleted='0' and t1.resolution!=''",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'project'),
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'resolution', 'queryField' => 'resolution')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1015,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de distribución de estados de Bug por proyecto', 'zh-tw' => 'Tabla de distribución de estados de Bug por proyecto', 'en' => 'Project Bug Status', 'de' => 'Project Bug Status', 'fr' => 'Project Bug Status', 'vi' => 'Project Bug Status', 'ja' => 'Project Bug Status'),
    'code'        => 'projectBugStatus',
    'desc'        => array('zh-cn' => 'Muestra la distribución del estado de los Bug por proyecto.', 'zh-tw' => 'Muestra la distribución del estado de los Bug por proyecto.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60,61',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.id,
    t3.name as project,
    t3.id as projectID,
    t1.name as execution,
    t1.id as `executionID`,
    t2.id as bugID,
    t2.status
from zt_project as t1
left join zt_bug as t2 on t1.id=t2.execution
left join zt_project as t3 on t3.id=t1.project
where t1.deleted='0'
and t2.deleted='0'
and (case when \$projectStatus='' then 1=1 else t3.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t3.id=\$project end)
and (case when \$execution='0' then 1=1 else t1.id=\$execution end)
and not (\$projectStatus='' and \$executionStatus='' and \$project='0' and \$execution='0')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'status', 'slice' => 'status', 'stat' => 'count', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'noShow',
        'group1'      => 'project',
        'group2'      => 'execution'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus', 'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0')
    ),
    'fields'    => array
    (
        'id'          => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'project'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'projectID'   => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'execution'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'executionID' => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'bugID'       => array('object' => 'bug', 'field' => '', 'type' => 'number'),
        'status'      => array('object' => 'bug', 'field' => 'status', 'type' => 'option')
    ),
    'langs'     => array
    (
        'id'          => array('zh-cn' => 'id', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'project'     => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectID'   => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'   => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionID' => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'bugID'       => array('zh-cn' => 'bugID', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'status'      => array('zh-cn' => 'Estado del Bug', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('projectStatus', 'executionStatus', 'project', 'execution'),
        'showName'    => array('Estado del proyecto', 'Estado de la ejecución', 'Lista de proyectos', 'Lista de ejecuciones'),
        'requestType' => array('select', 'select', 'select', 'select'),
        'selectList'  => array('project.status', 'execution.status', 'project', 'execution'),
        'default'     => array('doing', 'doing', '', '')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'status',
            'object'    => 'bug',
            'whereSql'  => "left join zt_project as t2 on t2.id=t1.execution  left join zt_project as t3 on t3.id=t1.project WHERE t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'execution'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'project'),
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'status', 'queryField' => 'status')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1016,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de distribución de creadores de Bug por proyecto', 'zh-tw' => 'Tabla de distribución de creadores de Bug por proyecto', 'en' => 'Project Bug Opened', 'de' => 'Project Bug Opened', 'fr' => 'Project Bug Opened', 'vi' => 'Project Bug Opened', 'ja' => 'Project Bug Opened'),
    'code'        => 'projectBugOpenedBy',
    'desc'        => array('zh-cn' => 'Muestra la distribución de los creadores de los Bug por proyecto.', 'zh-tw' => 'Muestra la distribución de los creadores de los Bug por proyecto.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60,61',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.id,
    t3.name as projectname,
    t3.id as projectID,
    t1.name as executionname,
    t1.id as execution,
    t2.id as bugID,
    t2.`openedBy`
from zt_project as t1
left join zt_bug as t2 on t1.id=t2.execution
left join zt_project as t3 on t3.id=t1.project
where t1.deleted='0'
and t2.deleted='0'
and (case when \$projectStatus='' then 1=1 else t3.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t3.id=\$project end)
and (case when \$execution='0' then 1=1 else t1.id=\$execution end)
and not (\$projectStatus='' and \$executionStatus='' and \$project='0' and \$execution='0')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'openedBy', 'slice' => 'openedBy', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'projectname',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus', 'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0')
    ),
    'fields'    => array
    (
        'id'            => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'projectname'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'projectID'     => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'executionname' => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'execution'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'bugID'         => array('object' => 'bug', 'field' => '', 'type' => 'number'),
        'openedBy'      => array('object' => 'project', 'field' => 'openedBy', 'type' => 'user')
    ),
    'langs'     => array
    (
        'id'            => array('zh-cn' => 'id', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectname'   => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectID'     => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname' => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'     => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'bugID'         => array('zh-cn' => 'bugID', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'openedBy'      => array('zh-cn' => 'Creador', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('projectStatus', 'executionStatus', 'project', 'execution'),
        'showName'    => array('Estado del proyecto', 'Estado de la ejecución', 'Lista de proyectos', 'Lista de ejecuciones'),
        'requestType' => array('select', 'select', 'select', 'select'),
        'selectList'  => array('projectStatus', 'executionStatus', 'project', 'execution'),
        'default'     => array('doing', 'doing', '', '')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'openedBy',
            'object'    => 'bug',
            'whereSql'  => "left join zt_project as t2 on t2.id=t1.execution  left join zt_project as t3 on t3.id=t2.project  where t1.deleted='0' and t2.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname'),
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'openedBy', 'queryField' => 'openedBy')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1017,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de distribución de resolutores de Bug por proyecto', 'zh-tw' => 'Tabla de distribución de resolutores de Bug por proyecto', 'en' => 'Project Bug Resolve', 'de' => 'Project Bug Resolve', 'fr' => 'Project Bug Resolve', 'vi' => 'Project Bug Resolve', 'ja' => 'Project Bug Resolve'),
    'code'        => 'projectBugResolvedBy',
    'desc'        => array('zh-cn' => 'Muestra la distribución de los resolutores de los Bug por proyecto.', 'zh-tw' => 'Muestra la distribución de los resolutores de los Bug por proyecto.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60,61',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.id,
    t3.name as projectname,
    t3.id as projectID,
    t1.name as executionname,
    t1.id as execution,
    t2.id as bugID,
    t2.`resolvedBy`
from zt_project as t1
left join zt_bug as t2 on t1.id=t2.execution
left join zt_project as t3 on t3.id=t1.project
where t1.deleted='0'
and t2.deleted='0'
and t2.status!='active'
and t2.`resolvedBy`!=''
and (case when \$projectStatus='' then 1=1 else t3.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t3.id=\$project end)
and (case when \$execution='0' then 1=1 else t1.id=\$execution end)
and not (\$projectStatus='' and \$executionStatus='' and \$project='0' and \$execution='0')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'resolvedBy', 'slice' => 'resolvedBy', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'projectname',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus', 'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0')
    ),
    'fields'    => array
    (
        'id'            => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'projectname'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'projectID'     => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'executionname' => array('object' => 'bug', 'field' => 'name', 'type' => 'string'),
        'execution'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'bugID'         => array('object' => 'bug', 'field' => '', 'type' => 'number'),
        'resolvedBy'    => array('object' => 'bug', 'field' => 'resolvedBy', 'type' => 'user')
    ),
    'langs'     => array
    (
        'id'            => array('zh-cn' => 'id', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectname'   => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectID'     => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname' => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'     => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'bugID'         => array('zh-cn' => 'bugID', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'resolvedBy'    => array('zh-cn' => 'Resuelto por', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('projectStatus', 'executionStatus', 'project', 'execution'),
        'showName'    => array('Estado del proyecto', 'Estado de la ejecución', 'Lista de proyectos', 'Lista de ejecuciones'),
        'requestType' => array('select', 'select', 'select', 'select'),
        'selectList'  => array('projectStatus', 'executionStatus', 'project', 'execution'),
        'default'     => array('doing', 'doing', '', '')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'resolvedBy',
            'object'    => 'bug',
            'whereSql'  => "left join zt_project as t2 on t2.id=t1.execution left join zt_project as t3 on t3.id=t2.project where t1.deleted='0' and t2.deleted='0' and t1.status!='active' and t1.`resolvedBy`!=''",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname'),
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'resolvedBy', 'queryField' => 'resolvedBy')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1018,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de distribución de asignación de Bug por proyecto', 'zh-tw' => 'Tabla de distribución de asignación de Bug por proyecto', 'en' => 'Project Bug Assign', 'de' => 'Project Bug Assign', 'fr' => 'Project Bug Assign', 'vi' => 'Project Bug Assign', 'ja' => 'Project Bug Assign'),
    'code'        => 'projectBugAssignedBy',
    'desc'        => array('zh-cn' => 'Muestra la distribución de los Bug según a quién están asignados, por proyecto.', 'zh-tw' => 'Muestra la distribución de los Bug según a quién están asignados, por proyecto.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60,61',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.id,
    t3.name as project,
    t3.id as projectID,
    t1.name as execution,
    t1.id as `executionID`,
    t2.id as bugID,
    t2.`assignedTo`
from zt_project as t1
left join zt_bug as t2 on t1.id=t2.execution
left join zt_project as t3 on t3.id=t1.project
where t1.deleted='0'
and t2.deleted='0'
and (case when \$projectStatus='' then 1=1 else t3.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t3.id=\$project end)
and (case when \$execution='0' then 1=1 else t1.id=\$execution end)
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'assignedTo', 'slice' => 'assignedTo', 'stat' => 'count', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'noShow',
        'group1'      => 'project',
        'group2'      => 'execution'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus',   'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0')
    ),
    'fields'    => array
    (
        'id'          => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'project'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'projectID'   => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'execution'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'executionID' => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'bugID'       => array('object' => 'bug', 'field' => '', 'type' => 'number'),
        'assignedTo'  => array('object' => 'bug', 'field' => 'assignedTo', 'type' => 'user')
    ),
    'langs'     => array
    (
        'id'          => array('zh-cn' => 'id', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'project'     => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectID'   => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'   => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionID' => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'bugID'       => array('zh-cn' => 'bugID', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'assignedTo'  => array('zh-cn' => 'Asignado a', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('project', 'execution'),
        'showName'    => array('Lista de proyectos', 'Lista de ejecuciones'),
        'requestType' => array('select', 'select'),
        'selectList'  => array('project', 'execution'),
        'default'     => array('', '')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'assignedTo',
            'object'    => 'bug',
            'whereSql'  => "left join zt_project as t2 on t1.project=t2.id left join zt_project as t3 on t1.execution=t3.id WHERE t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'project'),
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'assignedTo', 'queryField' => 'assignedTo'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'execution')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1019,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de calidad del proyecto', 'zh-tw' => 'Tabla de calidad del proyecto', 'en' => 'Project Quality Report', 'de' => 'Project Quality Report', 'fr' => 'Project Quality Report', 'vi' => 'Project Quality Report', 'ja' => 'Project Quality Report'),
    'code'        => 'projectQuality',
    'desc'        => array('zh-cn' => 'Lista del proyecto: total de requerimientos, requerimientos completados, total de tareas, tareas completadas, cantidad de Bug, Bug resueltos, Bug/requerimientos, Bug/tareas y cantidad de Bug importantes (severidad no mayor que 3).', 'zh-tw' => 'Lista del proyecto: total de requerimientos, requerimientos completados, total de tareas, tareas completadas, cantidad de Bug, Bug resueltos, Bug/requerimientos, Bug/tareas y cantidad de Bug importantes (severidad no mayor que 3).', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.id,
    t5.name as projectname,
    t5.id as project,
    t1.name as executionname,
    t1.id as execution,
    ifnull(t2.stories, 0) as stories,
    ifnull((t2.stories-t2.undone), 0) as doneStory,
    ifnull(t3.number, 0) as number,
    ifnull((t3.number-t3.undone), 0) as doneTask,
    ifnull(t4.bugs, 0) as bugs,
    ifnull(t4.resolutions, 0) as resolutions,
    ifnull(round(case when t2.stories>t2.undone then t4.bugs/(t2.stories-t2.undone) else 0 end,2), 0) as bugthanstory,
    ifnull(round(case when t3.number>t3.undone then t4.bugs/(t3.number-t3.undone) else 0 end,2), 0) as bugthantask,
    ifnull(t4.`seriousBugs`, 0) as seriousBugs
from zt_project as t1
left join ztv_projectstories as t2 on t1.id=t2.execution
left join ztv_executionsummary as t3 on t1.id=t3.execution
left join ztv_projectbugs as t4 on t1.id=t4.execution
left join zt_project as t5 on t5.id=t1.project
where t1.deleted='0'
and t1.type in ('sprint','stage')
and t1.grade='1'
and (case when \$projectStatus='' then 1=1 else t5.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t5.id=\$project end)
and (case when \$execution='0' then 1=1 else t1.id=\$execution end)
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'stories', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'doneStory', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'number', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'doneTask', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'bugs', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'resolutions', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'bugthanstory', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'bugthantask', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'seriousBugs', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'projectname',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus',   'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0')
    ),
    'fields'    => array
    (
        'id'            => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'projectname'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'project'       => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'executionname' => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'execution'     => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'stories'       => array('object' => 'project', 'field' => '', 'type' => 'string'),
        'doneStory'     => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'number'        => array('object' => 'project', 'field' => '', 'type' => 'string'),
        'doneTask'      => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'bugs'          => array('object' => 'project', 'field' => '', 'type' => 'string'),
        'resolutions'   => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'bugthanstory'  => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'bugthantask'   => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'seriousBugs'   => array('object' => 'project', 'field' => '', 'type' => 'number')
    ),
    'langs'     => array
    (
        'id'            => array('zh-cn' => 'id', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectname'   => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'project'       => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname' => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'     => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'stories'       => array('zh-cn' => 'Total de requerimientos', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'doneStory'     => array('zh-cn' => 'Historias cerradas', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'number'        => array('zh-cn' => 'Total de tareas', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'doneTask'      => array('zh-cn' => 'Tareas completadas', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'bugs'          => array('zh-cn' => 'Bugs', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'resolutions'   => array('zh-cn' => 'Bugs resueltos', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'bugthanstory'  => array('zh-cn' => 'Bug/requerimientos completados', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'bugthantask'   => array('zh-cn' => 'Bug/tareas completadas', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'seriousBugs'   => array('zh-cn' => 'Bug importantes', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('project', 'execution'),
        'showName'    => array('Lista de proyectos', 'Lista de ejecuciones'),
        'requestType' => array('select', 'select'),
        'selectList'  => array('project', 'execution'),
        'default'     => array('', '')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'stories',
            'object'    => 'story',
            'whereSql'  => "right join zt_projectstory as t2 on t2.story=t1.id left join zt_project as t3 on t2.project=t3.id  left join zt_project as t4 on t4.id=t3.project  where t3.deleted='0' and t3.type in ('sprint','stage') and t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't4', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'doneStory',
            'object'    => 'story',
            'whereSql'  => "right join zt_projectstory as t2 on t2.story=t1.id left join zt_project as t3 on t2.project=t3.id  left join zt_project as t4 on t4.id=t3.project  where t3.deleted='0' and t3.type in ('sprint','stage') and t1.deleted='0' and t1.status='closed'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't4', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'number',
            'object'    => 'task',
            'whereSql'  => "left join zt_project as t2 on t1.execution = t2.id left join zt_project as t3 on t3.id=t2.project  where t2.deleted='0' and t1.deleted='0' and t2.type in ('sprint','stage')",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'doneTask',
            'object'    => 'task',
            'whereSql'  => "left join zt_project as t2 on t1.execution = t2.id left join zt_project as t3 on t3.id=t2.project  where t2.deleted='0' and t1.deleted='0' and t1.status in ('closed','done') and t2.type in ('sprint','stage')",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'bugs',
            'object'    => 'bug',
            'whereSql'  => "left join zt_project as t2 on t1.execution = t2.id left join zt_project as t3 on t3.id=t2.project  where t2.deleted='0' and t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'resolutions',
            'object'    => 'bug',
            'whereSql'  => "left join zt_project as t2 on t1.execution = t2.id left join zt_project as t3 on t3.id=t2.project  where t2.deleted='0' and t1.deleted='0' and t1.resolution !=' '",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'seriousBugs',
            'object'    => 'bug',
            'whereSql'  => "left join zt_project as t2 on t1.execution = t2.id left join zt_project as t3 on t3.id=t2.project  where t2.deleted='0' and t1.deleted='0' and t1.severity<='2'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1020,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de estadísticas de tipos de Bug por producto', 'zh-tw' => 'Tabla de estadísticas de tipos de Bug por producto', 'en' => 'Bug Type of Product', 'de' => 'Bug Type of Product', 'fr' => 'Bug Type of Product'),
    'code'        => 'productBugType',
    'desc'        => array('zh-cn' => 'Muestra la distribución del tipo de los Bug por producto.', 'zh-tw' => 'Muestra la distribución del tipo de los Bug por producto.', 'en' => 'Type distribution of Bugs.', 'de' => 'Type distribution of Bugs.', 'fr' => 'Type distribution of Bugs.'),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '59,61',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t2.product,
    t1.name,
    t2.id as bugID,
    t2.type
from zt_product as t1
left join zt_bug as t2 on t1.id=t2.product
left join zt_project as t3 on t1.program=t3.id
where t1.deleted='0'
and t1.shadow='0'
and t2.deleted='0'
and (case when \$productStatus='' then 1=1 else t1.status=\$productStatus end)
and (case when \$productType='' then 1=1 else t1.type=\$productType end)
and (case when \$product='0' then 1=1 else t1.id=\$product end)
order by t3.`order` asc, t1.line desc, t1.`order` asc
EOT,
    'settings'  => array
    (
        'group1'      => 'product',
        'columnTotal' => 'sum',
        'columns'     => array
        (
            array('field' => 'type', 'slice' => 'type', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => '0', 'showOrigin' => 0)
        ),
        'summary'     => 'use'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'productStatus', 'name' => 'Estado del producto', 'type' => 'select', 'typeOption' => 'product.status', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'productType', 'name' => 'Tipo de producto', 'type' => 'select', 'typeOption' => 'product.type', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'product', 'name' => 'Lista de productos', 'type' => 'select', 'typeOption' => 'product', 'default' => '0')
    ),
    'fields'    => array
    (
        'product' => array('object' => 'product', 'field' => 'name', 'type' => 'object'),
        'name'    => array('object' => 'product', 'field' => 'name', 'type' => 'string'),
        'bugID'   => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'type'    => array('object' => 'bug', 'field' => 'type', 'type' => 'option')
    ),
    'langs'     => array
    (
        'product' => array('zh-cn' => 'Nombre del producto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'name'    => array('zh-cn' => 'Producto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'bugID'   => array('zh-cn' => 'bugID', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'type'    => array('zh-cn' => 'Bug por tipo', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array(),
    'drills'    => array
    (
        array
        (
            'field'     => 'type',
            'object'    => 'bug',
            'whereSql'  => "WHERE t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'product', 'queryField' => 'product'),
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'type', 'queryField' => 'type')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1021,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de calidad del producto', 'zh-tw' => 'Tabla de calidad del producto', 'en' => 'Product Quality', 'de' => 'Product Quality', 'fr' => 'Product Quality'),
    'code'        => 'productQuality',
    'desc'        => array('zh-cn' => 'Lista del producto: cantidad de requerimientos, total de requerimientos completados, cantidad de Bug, total de Bug resueltos, Bug/requerimientos y cantidad de Bug importantes (severidad menor que 3).', 'zh-tw' => 'Lista del producto: cantidad de requerimientos, total de requerimientos completados, cantidad de Bug, total de Bug resueltos, Bug/requerimientos y cantidad de Bug importantes (severidad menor que 3).', 'en' => 'Serious Bug (severity is less than 3).', 'de' => 'Serious Bug (severity is less than 3).', 'fr' => 'Serious Bug (severity is less than 3).'),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '59',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.id,
    t1.name,
    ifnull(t2.stories, 0) as stories,
    ifnull((t2.stories-t2.undone), 0) as doneStory,
    ifnull(t3.bugs, 0) as bugs,
    ifnull(t3.resolutions, 0) as resolutions,
    ifnull(round(case when t2.stories>t2.undone then t3.bugs/(t2.stories-t2.undone) else 0 end,2), 0) as bugthanstory,
    ifnull(t3.`seriousBugs`, 0) as seriousBugs
from zt_product as t1
left join ztv_productstories as t2 on t1.id=t2.product
left join ztv_productbugs as t3 on t1.id=t3.product
left join zt_project as t4 on t1.program=t4.id
where t1.deleted='0'
and t1.shadow='0'
and (case when \$productStatus='' then 1=1 else t1.status=\$productStatus end)
and (case when \$productType='' then 1=1 else t1.type=\$productType end)
and (case when \$product='0' then 1=1 else t1.id=\$product end)
order by t4.`order` asc, t1.line desc, t1.`order` asc
EOT,
    'settings'  => array
    (
        'group1'      => 'name',
        'columnTotal' => 'sum',
        'columns'     => array
        (
            array('field' => 'stories', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => '0', 'showOrigin' => 0),
            array('field' => 'doneStory', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => '0', 'showOrigin' => 0),
            array('field' => 'bugs', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => '0', 'showOrigin' => 0),
            array('field' => 'resolutions', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => '0', 'showOrigin' => 0),
            array('field' => 'bugthanstory', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => '0', 'showOrigin' => 0),
            array('field' => 'seriousBugs', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => '1', 'showOrigin' => 0)
        ),
        'summary'     => 'use'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'productStatus', 'name' => 'Estado del producto', 'type' => 'select', 'typeOption' => 'product.status', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'productType', 'name' => 'Tipo de producto', 'type' => 'select', 'typeOption' => 'product.type', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'product', 'name' => 'Lista de productos', 'type' => 'select', 'typeOption' => 'product', 'default' => '0')
    ),
    'fields'    => array
    (
        'id'           => array('object' => 'product', 'field' => 'id', 'type' => 'number'),
        'name'         => array('object' => 'product', 'field' => 'name', 'type' => 'string'),
        'stories'      => array('object' => 'project', 'field' => '', 'type' => 'string'),
        'doneStory'    => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'bugs'         => array('object' => 'product', 'field' => '', 'type' => 'string'),
        'resolutions'  => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'bugthanstory' => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'seriousBugs'  => array('object' => 'project', 'field' => '', 'type' => 'number')
    ),
    'langs'     => array
    (
        'id'           => array('zh-cn' => 'ID del producto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'name'         => array('zh-cn' => 'Nombre del producto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'stories'      => array('zh-cn' => 'Total de requerimientos', 'zh-tw' => 'Total de requerimientos', 'en' => 'Stories', 'de' => '', 'fr' => ''),
        'doneStory'    => array('zh-cn' => 'Historias cerradas', 'zh-tw' => 'Historias cerradas', 'en' => 'Closed Stories', 'de' => '', 'fr' => ''),
        'bugs'         => array('zh-cn' => 'Bugs', 'zh-tw' => 'Bugs', 'en' => 'Bugs', 'de' => '', 'fr' => ''),
        'resolutions'  => array('zh-cn' => 'Bugs resueltos', 'zh-tw' => 'Bugs resueltos', 'en' => 'Solved Bugs', 'de' => '', 'fr' => ''),
        'bugthanstory' => array('zh-cn' => 'Bug/requerimientos completados', 'zh-tw' => 'Bug/requerimientos completados', 'en' => 'Bug/Finished Story', 'de' => '', 'fr' => ''),
        'seriousBugs'  => array('zh-cn' => 'Bug importantes', 'zh-tw' => 'Bug importantes', 'en' => 'Serious Bugs', 'de' => '', 'fr' => '')
    ),
    'vars'      => array(),
    'drills'    => array
    (
        array
        (
            'field'     => 'stories',
            'object'    => 'story',
            'whereSql'  => "left join zt_product as t2 on t1.product = t2.id where t1.deleted='0' ",
            'condition' => array
            (
                array('drillObject' => 'zt_story', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'name')
            )
        ),
        array
        (
            'field'     => 'doneStory',
            'object'    => 'story',
            'whereSql'  => "left join zt_product as t2 on t1.product = t2.id where t1.deleted='0' and t1.status='closed'",
            'condition' => array
            (
                array('drillObject' => 'zt_story', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'name')
            )
        ),
        array
        (
            'field'     => 'bugs',
            'object'    => 'bug',
            'whereSql'  => "left join zt_product as t2 on t1.product = t2.id where t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_bug', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'name')
            )
        ),
        array
        (
            'field'     => 'resolutions',
            'object'    => 'bug',
            'whereSql'  => "left join zt_product as t2 on t1.product = t2.id where t1.deleted='0' and t1.resolution !=' '",
            'condition' => array
            (
                array('drillObject' => 'zt_bug', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'name')
            )
        ),
        array
        (
            'field'     => 'seriousBugs',
            'object'    => 'bug',
            'whereSql'  => "left join zt_product as t2 on t1.product = t2.id  where t1.deleted and t1.severity<='2'",
            'condition' => array
            (
                array('drillObject' => 'zt_bug', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'name')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1022,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de estadísticas de inicios de sesión de empleados', 'zh-tw' => 'Tabla de estadísticas de inicios de sesión de empleados', 'en' => 'Login Times', 'de' => 'Login Times', 'fr' => 'Login Times'),
    'code'        => 'loginTimes',
    'desc'        => array('zh-cn' => 'Implementa el reporte de estadísticas de inicios de sesión de empleados: cuenta por día los inicios de sesión de cada persona, así como el total.', 'zh-tw' => 'Implementa el reporte de estadísticas de inicios de sesión de empleados: cuenta por día los inicios de sesión de cada persona, así como el total.', 'en' => 'The summary of user login times.', 'de' => 'The summary of user login times.', 'fr' => 'The summary of user login times.'),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '62',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select t1.actor,LEFT(t1.`date`,10) as `day` from zt_action t1
left join zt_user as t2 on t1.actor = t2.account
where t1.`action`='login'
and if(\$startDate='',1=1,LEFT(t1.`date`, 10)>=\$startDate)
and if(\$endDate='',1=1,LEFT(t1.`date`, 10)<=\$endDate)
and if(\$dept='',1=1,t2.`dept`=\$dept)
and not (\$startDate='' and \$endDate='' and \$dept='')
order by t1.`date` asc, t1.actor asc
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'group1'      => 'actor',
        'columns'     => array
        (
            array('field' => 'day', 'slice' => 'day', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'startDate', 'name' => 'Hora de inicio', 'type' => 'date', 'typeOption' => '', 'default' => '$MONDAY'),
        array('from' => 'query', 'field' => 'endDate', 'name' => 'Hora de fin', 'type' => 'date', 'typeOption' => '', 'default' => '$SUNDAY'),
        array('from' => 'query', 'field' => 'dept', 'name' => 'Departamento', 'type' => 'select', 'typeOption' => 'dept', 'default' => '0')
    ),
    'fields'    => array
    (
        'actor' => array('object' => 'action', 'field' => 'actor', 'type' => 'user'),
        'day'   => array('object' => 'action', 'field' => 'day', 'type' => 'string')
    ),
    'langs'     => array
    (
        'actor' => array('name' => 'Operador', 'zh-cn' => 'Operador', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'day'   => array('name' => 'day', 'zh-cn' => 'Fecha', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('startDate', 'endDate'),
        'showName'    => array('Hora de inicio', 'Hora de fin'),
        'requestType' => array('date', 'date'),
        'selectList'  => array('user', 'user'),
        'default'     => array('$MONTHBEGIN', '$MONTHEND')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'day',
            'object'    => 'action',
            'whereSql'  => "left join (select date(date) `day`,id from zt_action) t2 on t2.id=t1.id WHERE t1.`action`='login' AND if(\$startDate='',1,`date`>=\$startDate) AND if(\$endDate='',1,`date`<=\$endDate)",
            'condition' => array
            (
                array('drillAlias' => 't2', 'queryField' => 'day', 'drillObject' => '', 'drillField' => 'day'),
                array('drillObject' => 'zt_action', 'drillAlias' => 't1', 'drillField' => 'actor', 'queryField' => 'actor')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1023,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla resumen de registros de esfuerzo', 'zh-tw' => 'Tabla resumen de registros de esfuerzo', 'en' => 'Effort Summary', 'de' => 'Effort Summary', 'fr' => 'Effort Summary'),
    'code'        => 'effortSummary',
    'desc'        => array('zh-cn' => 'Consulta los registros de esfuerzo en un periodo determinado; se puede seleccionar por departamento.', 'zh-tw' => 'Consulta los registros de esfuerzo en un periodo determinado; se puede seleccionar por departamento.', 'en' => 'Effort summary of users within a certain period of time, you can select by department.', 'de' => 'Effort summary of users within a certain period of time, you can select by department.', 'fr' => 'Effort summary of users within a certain period of time, you can select by department.'),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '62',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.account,
    t1.consumed,
    t1.`date`,
    t2.dept as dept
from zt_effort as t1
left join zt_user as t2 on t1.account = t2.account
left join zt_dept as t3 on t2.dept = t3.id
where t1.`deleted` = '0'
and (case when \$startDate='' then 1=1 else cast(t1.`date` as date) >= cast(\$startDate as date) end)
and (case when \$endDate='' then 1=1 else cast(t1.`date` as date) <= cast(\$endDate as date) end)
and (t3.path like concat((select path from zt_dept where id=\$dept), '%') or \$dept=0)
and not (\$startDate='' and \$endDate='' and \$dept='')
order by t1.`date` asc
EOT,
    'settings'  => array
    (
        'group1'      => 'account',
        'columnTotal' => 'sum',
        'columns'     => array
        (
            array('field' => 'consumed', 'slice' => 'date', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => '0', 'showOrigin' => 0)
        ),
        'lastStep'    => '4',
        'summary'     => 'use'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'dept', 'name' => 'Departamento', 'type' => 'select', 'typeOption' => 'dept', 'default' => '0'),
        array('from' => 'query', 'field' => 'startDate', 'name' => 'Hora de inicio', 'type' => 'date', 'typeOption' => '', 'default' => '$MONDAY'),
        array('from' => 'query', 'field' => 'endDate', 'name' => 'Hora de fin', 'type' => 'date', 'typeOption' => '', 'default' => '$SUNDAY')
    ),
    'fields'    => array
    (
        'account'  => array('object' => 'effort', 'field' => 'account', 'type' => 'user'),
        'consumed' => array('object' => 'effort', 'field' => 'consumed', 'type' => 'number'),
        'date'     => array('object' => 'effort', 'field' => 'date', 'type' => 'date'),
        'dept'     => array('object' => 'effort', 'field' => 'dept', 'type' => 'number')
    ),
    'langs'     => array
    (
        'account'  => array('name' => 'account', 'zh-cn' => 'Nombre', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'consumed' => array('name' => 'consumed', 'zh-cn' => 'Horas consumidas', 'zh-tw' => 'Horas consumidas', 'en' => 'Cost', 'de' => '', 'fr' => ''),
        'date'     => array('name' => 'date', 'zh-cn' => 'Fecha', 'zh-tw' => 'Fecha', 'en' => 'Date', 'de' => '', 'fr' => ''),
        'dept'     => array('name' => 'dept', 'zh-cn' => 'Departamento', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('dept', 'startDate', 'endDate'),
        'showName'    => array('Departamento', 'Hora de inicio', 'Hora de fin'),
        'requestType' => array('select', 'date', 'date'),
        'selectList'  => array('dept', 'user', 'user'),
        'default'     => array('', '$MONTHBEGIN', '$MONTHEND')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'consumed',
            'object'    => 'effort',
            'whereSql'  => "left join zt_user as t2 on t1.account = t2.account left join zt_dept as t3 on t2.dept = t3.id where t1.`deleted` = '0' and (case when \$startDate='' then 1=1 else cast(t1.`date` as date) >= cast(\$startDate as date) end) and (case when \$endDate='' then 1=1 else cast(t1.`date` as date) <= cast(\$endDate as date) end)  and (t3.path like concat((select path from zt_dept where id=\$dept), '%') or \$dept=0) order by t1.`date` asc",
            'condition' => array
            (
                array('drillObject' => 'zt_effort', 'drillAlias' => 't1', 'drillField' => 'account', 'queryField' => 'account'),
                array('drillObject' => 'zt_effort', 'drillAlias' => 't1', 'drillField' => 'date', 'queryField' => 'date')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1024,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla resumen de actividad de la empresa', 'zh-tw' => 'Tabla resumen de actividad de la empresa', 'en' => 'Company Dynamics', 'de' => 'Company Dynamics', 'fr' => 'Company Dynamics'),
    'code'        => 'companyDynamics',
    'desc'        => array('zh-cn' => 'Se puede especificar un periodo y listar los datos correspondientes: 1. Inicios de sesión por día. 2. Horas registradas por día. 3. Requerimientos nuevos por día. 4. Requerimientos cerrados por día. 5. Tareas nuevas por día. 6. Tareas completadas por día. 7. Bug nuevos por día. 8. Bug resueltos por día. 9. Actividades por día.', 'zh-tw' => 'Se puede especificar un periodo y listar los datos correspondientes: 1. Inicios de sesión por día. 2. Horas registradas por día. 3. Requerimientos nuevos por día. 4. Requerimientos cerrados por día. 5. Tareas nuevas por día. 6. Tareas completadas por día. 7. Bug nuevos por día. 8. Bug resueltos por día. 9. Actividades por día.', 'en' => 'The summary of company dynamics', 'de' => 'The summary of company dynamics', 'fr' => 'The summary of company dynamics'),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '62',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select t1.day,t2.userlogin,t3.consumed,t4.storyopen,t5.storyclose,t6.taskopen,t7.taskfinish,t8.bugopen,t9.bugresolve,t1.actions from ztv_dayactions as t1
left join ztv_dayuserlogin as t2 on t1.day=t2.day
left join ztv_dayeffort as t3 on t1.day=t3.date
left join ztv_daystoryopen as t4 on t1.day=t4.day
left join ztv_daystoryclose as t5 on t1.day=t5.day
left join ztv_daytaskopen as t6 on t1.day=t6.day
left join ztv_daytaskfinish as t7 on t1.day=t7.day
left join ztv_daybugopen as t8 on t1.day=t8.day
left join ztv_daybugresolve as t9 on t1.day=t9.day
where if(\$startDate='',1=1,t1.day>=\$startDate)
and if(\$endDate='',1=1,t1.day<=\$endDate)
and not (\$startDate='' and \$endDate='')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'group1'      => 'day',
        'columns'     => array
        (
            array('field' => 'userlogin', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'consumed', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'storyopen', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'storyclose', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'taskopen', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'taskfinish', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'bugopen', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'bugresolve', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'actions', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'startDate', 'name' => 'Hora de inicio', 'type' => 'date', 'typeOption' => '', 'default' => '$MONDAY'),
        array('from' => 'query', 'field' => 'endDate', 'name' => 'Hora de fin', 'type' => 'date', 'typeOption' => '', 'default' => '$SUNDAY')
    ),
    'fields'    => array
    (
        'day'        => array('object' => '', 'field' => 'day', 'type' => 'string'),
        'userlogin'  => array('object' => '', 'field' => 'userlogin', 'type' => 'string'),
        'consumed'   => array('object' => '', 'field' => 'consumed', 'type' => 'number'),
        'storyopen'  => array('object' => '', 'field' => 'storyopen', 'type' => 'string'),
        'storyclose' => array('object' => '', 'field' => 'storyclose', 'type' => 'string'),
        'taskopen'   => array('object' => '', 'field' => 'taskopen', 'type' => 'string'),
        'taskfinish' => array('object' => '', 'field' => 'taskfinish', 'type' => 'string'),
        'bugopen'    => array('object' => '', 'field' => 'bugopen', 'type' => 'string'),
        'bugresolve' => array('object' => '', 'field' => 'bugresolve', 'type' => 'string'),
        'actions'    => array('object' => '', 'field' => 'actions', 'type' => 'string')
    ),
    'langs'     => array
    (
        'day'        => array('zh-cn' => 'Fecha', 'zh-tw' => 'Fecha', 'en' => 'Date'),
        'userlogin'  => array('zh-cn' => 'Inicios de sesión', 'zh-tw' => 'Inicios de sesión', 'en' => 'Login'),
        'consumed'   => array('zh-cn' => 'Horas del registro', 'zh-tw' => 'Horas del registro', 'en' => 'Cost(h)'),
        'storyopen'  => array('zh-cn' => 'Historias nuevas', 'zh-tw' => 'Requerimientos nuevos', 'en' => 'Open Story'),
        'storyclose' => array('zh-cn' => 'Historias cerradas', 'zh-tw' => 'Requerimientos cerrados', 'en' => 'Closed Story'),
        'taskopen'   => array('zh-cn' => 'Tareas nuevas', 'zh-tw' => 'Tareas nuevas', 'en' => 'Open Task'),
        'taskfinish' => array('zh-cn' => 'Tareas completadas', 'zh-tw' => 'Tareas completadas', 'en' => 'Finished Task'),
        'bugopen'    => array('zh-cn' => 'Bugs nuevos', 'zh-tw' => 'Bug nuevos', 'en' => 'Open Bug'),
        'bugresolve' => array('zh-cn' => 'Bugs resueltos', 'zh-tw' => 'Bug resueltos', 'en' => 'Resolved bug'),
        'actions'    => array('zh-cn' => 'Actividades', 'zh-tw' => 'Actividades', 'en' => 'Dynamics')
    ),
    'vars'      => array
    (
        'varName'     => array('startDate', 'endDate'),
        'showName'    => array('Hora de inicio', 'Hora de fin'),
        'requestType' => array('date', 'date'),
        'selectList'  => array('user', 'user'),
        'default'     => array('$MONTHBEGIN', '$MONTHEND')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'userlogin',
            'object'    => 'action',
            'whereSql'  => "left join ztv_dayuserlogin  t2 on date(t1.date)=t2.day where ((t1.`objectType` = 'user') and (t1.action = 'login')) and if(\$startDate='',1,t2.day>=\$startDate)  and if(\$endDate='',1,t2.day<=\$endDate)",
            'condition' => array
            (
                array('drillObject' => 'ztv_dayuserlogin', 'drillAlias' => 't2', 'drillField' => 'day', 'queryField' => 'day')
            )
        ),
        array
        (
            'field'     => 'consumed',
            'object'    => 'effort',
            'whereSql'  => "where if(\$startDate='',1,t1.date>=\$startDate) and if(\$endDate='',1,t1.date<=\$endDate) ",
            'condition' => array
            (
                array('drillObject' => 'zt_effort', 'drillAlias' => 't1', 'drillField' => 'date', 'queryField' => 'day')
            )
        ),
        array
        (
            'field'     => 'storyopen',
            'object'    => 'story',
            'whereSql'  => "right join (select objectID,date(`date`) day from zt_action where objectType = 'story' and  action = 'opened') t2 on t2.`objectID`=t1.id where if(\$startDate='',1,t2.day>=\$startDate) and if(\$endDate='',1,t2.day<=\$endDate)",
            'condition' => array
            (
                array('drillAlias' => 't2', 'queryField' => 'day', 'drillObject' => '', 'drillField' => 'day')
            )
        ),
        array
        (
            'field'     => 'storyclose',
            'object'    => 'story',
            'whereSql'  => "right join (select objectID,date(`date`) day from zt_action where objectType = 'story' and  action = 'closed') t2 on t2.`objectID`=t1.id where if(\$startDate='',1,t2.day>=\$startDate) and if(\$endDate='',1,t2.day<=\$endDate)",
            'condition' => array
            (
                array('drillAlias' => 't2', 'queryField' => 'day', 'drillObject' => '', 'drillField' => 'day')
            )
        ),
        array
        (
            'field'     => 'taskopen',
            'object'    => 'task',
            'whereSql'  => "right join (select objectID,date(`date`) day from zt_action where objectType = 'task' and  action = 'opened') t2 on t2.`objectID`=t1.id where if(\$startDate='',1,t2.day>=\$startDate) and if(\$endDate='',1,t2.day<=\$endDate)",
            'condition' => array
            (
                array('drillAlias' => 't2', 'queryField' => 'day', 'drillObject' => '', 'drillField' => 'day')
            )
        ),
        array
        (
            'field'     => 'taskfinish',
            'object'    => 'task',
            'whereSql'  => "right join (select objectID,date(`date`) day from zt_action where objectType = 'task' and  action = 'finished') t2 on t2.`objectID`=t1.id where if(\$startDate='',1,t2.day>=\$startDate) and if(\$endDate='',1,t2.day<=\$endDate)",
            'condition' => array
            (
                array('drillAlias' => 't2', 'queryField' => 'day', 'drillObject' => '', 'drillField' => 'day')
            )
        ),
        array
        (
            'field'     => 'bugopen',
            'object'    => 'bug',
            'whereSql'  => "right join (select objectID,date(`date`) day from zt_action where objectType = 'bug' and  action = 'opened') t2 on t2.`objectID`=t1.id where if(\$startDate='',1,t2.day>=\$startDate) and if(\$endDate='',1,t2.day<=\$endDate)",
            'condition' => array
            (
                array('drillAlias' => 't2', 'queryField' => 'day', 'drillObject' => '', 'drillField' => 'day')
            )
        ),
        array
        (
            'field'     => 'bugresolve',
            'object'    => 'bug',
            'whereSql'  => "right join (select objectID,date(`date`) day from zt_action where objectType = 'bug' and  action = 'resolved') t2 on t2.`objectID`=t1.id where if(\$startDate='',1,t2.day>=\$startDate) and if(\$endDate='',1,t2.day<=\$endDate)",
            'condition' => array
            (
                array('drillObject' => '', 'drillAlias' => 't2', 'drillField' => 'day', 'queryField' => 'day')
            )
        ),
        array
        (
            'field'     => 'actions',
            'object'    => 'action',
            'whereSql'  => "left join (select id,date(`date`) day from zt_action)  t2 on t1.id=t2.id where if(\$startDate='',1,t2.day>=\$startDate)  and if(\$endDate='',1,t2.day<=\$endDate)",
            'condition' => array
            (
                array('drillObject' => '', 'drillAlias' => 't2', 'drillField' => 'day', 'queryField' => 'day')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1025,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de Bug resueltos', 'zh-tw' => 'Tabla de Bug resueltos', 'en' => 'Solved Bugs', 'de' => 'Solved Bugs', 'fr' => 'Solved Bugs'),
    'code'        => 'slovedBugs',
    'desc'        => array('zh-cn' => 'Lista el total de Bug resueltos, la distribución de soluciones y la proporción (la cantidad de Bug resueltos por ese usuario respecto a todos los Bug resueltos).', 'zh-tw' => 'Lista el total de Bug resueltos, la distribución de soluciones y la proporción (la cantidad de Bug resueltos por ese usuario respecto a todos los Bug resueltos).', 'en' => 'percentage:self resolved / all resolved', 'de' => 'percentage:self resolved / all resolved', 'fr' => 'percentage:self resolved / all resolved'),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '61',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.`resolvedBy`,t1.resolution
from zt_bug as t1
left join zt_product as t2 on t1.product = t2.id
where t1.deleted='0'
and t2.deleted='0'
and t1.resolution!=''
and (case when \$startDate='' then 1=1 else cast(t1.`resolvedDate` as date)>=cast(\$startDate as date) end)
and (case when \$endDate='' then 1=1 else cast(t1.`resolvedDate` as date)<=cast(\$endDate as date) end)
and (case when \$product = '' then 1=1 else t1.product=\$product end)
and not (\$product='0' and \$startDate='' and \$endDate='')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'resolution', 'slice' => 'resolution', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'row', 'monopolize' => 1, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'resolvedBy'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'product', 'name' => 'Producto', 'type' => 'select', 'typeOption' => 'product', 'default' => '0'),
        array('from' => 'query', 'field' => 'startDate', 'name' => 'Inicio de la fecha de resolución', 'type' => 'date', 'typeOption' => '', 'default' => '$MONTHBEGIN'),
        array('from' => 'query', 'field' => 'endDate', 'name' => 'Fin de la fecha de resolución', 'type' => 'date', 'typeOption' => '', 'default' => '$MONTHEND')
    ),
    'fields'    => array
    (
        'resolvedBy'     => array('object' => 'bug', 'field' => 'resolvedBy', 'type' => 'user'),
        'resolution'     => array('object' => 'bug', 'field' => 'resolution', 'type' => 'option')
    ),
    'langs'     => array
    (
        'resolvedBy'     => array('zh-cn' => 'Resuelto por', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'resolution'     => array('zh-cn' => 'Bug por solución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('product', 'startDate', 'endDate'),
        'showName'    => array('Producto', 'Inicio de la fecha de resolución', 'Fin de la fecha de resolución'),
        'requestType' => array('select', 'date', 'date'),
        'selectList'  => array('product', 'user', 'user'),
        'default'     => array('', '$MONTHBEGIN', '$MONTHEND')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'resolution',
            'object'    => 'bug',
            'whereSql'  => "left join zt_product as t2 on t1.product = t2.id WHERE t1.deleted='0' AND t1.resolution!=''  and (case when \$startDate='' then 1=1 else cast(t1.`resolvedDate` as date)>=cast(\$startDate as date) end)  and (case when \$endDate='' then 1=1 else cast(t1.`resolvedDate` as date)<=cast(\$endDate as date) end)  and (case when \$product = '' then 1=1 else t1.product=\$product end)",
            'condition' => array
            (
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'resolvedBy', 'queryField' => 'resolvedBy'),
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'resolution', 'queryField' => 'resolution')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1026,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de avance del proyecto', 'zh-tw' => 'Tabla de avance del proyecto', 'en' => 'Project Progress Report', 'de' => 'Project Progress Report', 'fr' => 'Project Progress Report', 'vi' => 'Project Progress Report', 'ja' => 'Project Progress Report'),
    'code'        => 'projectProgress',
    'desc'        => array('zh-cn' => 'Del proyecto: cantidad de requerimientos, requerimientos restantes (excluyendo los de estado Cerrado), cantidad de tareas, tareas restantes (excluyendo las de estado Completada y Cerrada), horas restantes (horas restantes de las tareas restantes) y horas consumidas.', 'zh-tw' => 'Del proyecto: cantidad de requerimientos, cantidad de tareas, horas consumidas, horas restantes, requerimientos restantes, tareas restantes y avance.', 'en' => '', 'de' => '', 'fr' => '', 'vi' => '', 'ja' => ''),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.id,
    t4.name as projectname,
    t4.id as project,
    t1.name as executionname,
    t1.id as execution,
    t1.status,
    t2.number as tasks,
    round(t2.consumed,2) as consumed,
    round(t2.`left`,2) as `left`,
    t3.stories,
    t2.undone as undoneTask,
    t3.undone as undoneStory,
    t2.`totalReal` from zt_project as t1
left join ztv_executionsummary as t2 on t1.id=t2.execution
left join ztv_projectstories as t3 on t1.id=t3.execution
left join zt_project as t4 on t4.id=t1.project
where t1.deleted='0'
and t1.type in ('sprint','stage')
and (case when \$projectStatus='' then 1=1 else t4.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t4.id=\$project end)
and (case when \$execution='0' then 1=1 else t1.id=\$execution end)
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'stories', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'undoneStory', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'tasks', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'undoneTask', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'left', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0),
            array('field' => 'consumed', 'slice' => 'noSlice', 'stat' => 'sum', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'projectname',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus',   'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0')
    ),
    'fields'    => array
    (
        'id'            => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'projectname'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'project'       => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'executionname' => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'execution'     => array('object' => 'project', 'field' => 'id', 'type' => 'string'),
        'status'        => array('object' => 'project', 'field' => 'status', 'type' => 'option'),
        'tasks'         => array('object' => 'project', 'field' => '', 'type' => 'string'),
        'consumed'      => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'left'          => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'stories'       => array('object' => 'project', 'field' => '', 'type' => 'string'),
        'undoneTask'    => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'undoneStory'   => array('object' => 'project', 'field' => '', 'type' => 'number'),
        'totalReal'     => array('object' => 'project', 'field' => '', 'type' => 'number')
    ),
    'langs'     => array
    (
        'id'            => array('zh-cn' => 'id', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectname'   => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'project'       => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname' => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'     => array('zh-cn' => 'ID de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'status'        => array('zh-cn' => 'Estado', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'tasks'         => array('zh-cn' => 'Tareas', 'zh-tw' => 'Tareas', 'en' => 'Tasks', 'de' => '', 'fr' => ''),
        'consumed'      => array('zh-cn' => 'Horas consumidas', 'zh-tw' => 'Horas consumidas', 'en' => 'Cost(h)', 'de' => '', 'fr' => ''),
        'left'          => array('zh-cn' => 'Horas restantes', 'zh-tw' => 'Horas restantes', 'en' => 'Left(h)', 'de' => '', 'fr' => ''),
        'stories'       => array('zh-cn' => 'Historias', 'zh-tw' => 'Historias', 'en' => 'Stories', 'de' => '', 'fr' => ''),
        'undoneTask'    => array('zh-cn' => 'Tareas restantes', 'zh-tw' => 'Tareas restantes', 'en' => 'Undone Task', 'de' => '', 'fr' => ''),
        'undoneStory'   => array('zh-cn' => 'Historias restantes', 'zh-tw' => 'Historias restantes', 'en' => 'Undone Story', 'de' => '', 'fr' => ''),
        'totalReal'     => array('zh-cn' => 'totalReal', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('project', 'execution', 'status'),
        'showName'    => array('Lista de proyectos', 'Lista de ejecuciones', 'Estado de la ejecución'),
        'requestType' => array('select', 'select', 'select'),
        'selectList'  => array('project', 'execution', 'project.status'),
        'default'     => array('', '', '')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'stories',
            'object'    => 'story',
            'whereSql'  => "right join zt_projectstory as t2 on t2.story=t1.id left join zt_project as t3 on t2.project=t3.id  left join zt_project as t4 on t4.id=t3.project  where t3.deleted='0' and t3.type in ('sprint','stage') and t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't4', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'undoneStory',
            'object'    => 'story',
            'whereSql'  => "right join zt_projectstory as t2 on t2.story=t1.id left join zt_project as t3 on t2.project=t3.id  left join zt_project as t4 on t4.id=t3.project  where t3.deleted='0' and t3.type in ('sprint','stage')  and t1.status !='closed' and t1.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't4', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'tasks',
            'object'    => 'task',
            'whereSql'  => "left join zt_project as t2 on t1.execution = t2.id left join zt_project as t3 on t3.id=t2.project  where t2.deleted='0' and t1.deleted='0' and t2.type in ('sprint','stage')",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'undoneTask',
            'object'    => 'task',
            'whereSql'  => "left join zt_project as t2 on t1.execution = t2.id left join zt_project as t3 on t3.id=t2.project  where t2.deleted='0' and t1.deleted='0' and t2.type in ('sprint','stage') and t1.status not in ('closed','done')",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'left',
            'object'    => 'task',
            'whereSql'  => "left join zt_project as t2 on t1.execution = t2.id left join zt_project as t3 on t3.id=t2.project  where t2.deleted='0' and t1.deleted='0' and t2.type in ('sprint','stage') and t1.status not in ('closed','done')",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        ),
        array
        (
            'field'     => 'consumed',
            'object'    => 'task',
            'whereSql'  => "left join zt_project as t2 on t1.execution = t2.id left join zt_project as t3 on t3.id=t2.project  where t2.deleted='0' and t1.deleted='0' and t2.type in ('sprint','stage')",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1027,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de estadísticas de tipos de Bug por ejecución del proyecto', 'zh-tw' => 'Tabla de estadísticas de tipos de Bug por proyecto', 'en' => 'Project Bug Type', 'de' => 'Project Bug Type', 'fr' => 'Project Bug Type'),
    'code'        => 'projectBugType',
    'desc'        => array('zh-cn' => 'Muestra la distribución del tipo de los Bug por cada ejecución del proyecto.', 'zh-tw' => 'Muestra la distribución del tipo de los Bug por proyecto.'),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '60,61',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.id,
    t2.project as project,
    t3.name as projectname,
    t1.id as execution,
    t1.name as executionname,
    t2.id as bugID,
    t2.type from zt_project as t1
left join zt_bug as t2 on t1.id=t2.execution
left join zt_project as t3 on t3.id=t1.project
where t1.deleted='0'
and t2.deleted='0'
and (case when \$projectStatus='' then 1=1 else t3.status=\$projectStatus end)
and (case when \$executionStatus='' then 1=1 else t1.status=\$executionStatus end)
and (case when \$project='0' then 1=1 else t3.id=\$project end)
and (case when \$execution='0' then 1=1 else t1.id=\$execution end)
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'type', 'slice' => 'type', 'stat' => 'count', 'showTotal' => 'noShow', 'showMode' => 'default', 'monopolize' => 0, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'projectname',
        'group2'      => 'executionname'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'projectStatus',   'name' => 'Estado del proyecto', 'type' => 'select', 'typeOption' => 'project.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'executionStatus', 'name' => 'Estado de la ejecución', 'type' => 'select', 'typeOption' => 'execution.status', 'default' => 'doing'),
        array('from' => 'query', 'field' => 'project', 'name' => 'Lista de proyectos', 'type' => 'select', 'typeOption' => 'project', 'default' => '0'),
        array('from' => 'query', 'field' => 'execution', 'name' => 'Lista de ejecuciones', 'type' => 'select', 'typeOption' => 'execution', 'default' => '0')
    ),
    'fields'    => array
    (
        'id'            => array('object' => 'project', 'field' => 'id', 'type' => 'number'),
        'project'       => array('object' => 'project', 'field' => 'name', 'type' => 'object'),
        'projectname'   => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'execution'     => array('object' => 'project', 'field' => 'id', 'type' => 'string'),
        'executionname' => array('object' => 'project', 'field' => 'name', 'type' => 'string'),
        'bugID'         => array('object' => 'bug', 'field' => '', 'type' => 'number'),
        'type'          => array('object' => 'bug', 'field' => 'type', 'type' => 'option')
    ),
    'langs'     => array
    (
        'id'            => array('zh-cn' => 'ID del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'project'       => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'projectname'   => array('zh-cn' => 'Nombre del proyecto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'execution'     => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'executionname' => array('zh-cn' => 'Nombre de la ejecución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'bugID'         => array('zh-cn' => 'bugID', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'type'          => array('zh-cn' => 'Bug por tipo', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('project', 'execution'),
        'showName'    => array('Lista de proyectos', 'Lista de ejecuciones'),
        'requestType' => array('select', 'select'),
        'selectList'  => array('project', 'execution'),
        'default'     => array('', '')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'type',
            'object'    => 'bug',
            'whereSql'  => "left join zt_project as t2 on t2.id=t1.execution left join zt_project as t3 on t3.id=t2.project where t1.deleted='0' and t2.deleted='0'",
            'condition' => array
            (
                array('drillObject' => 'zt_project', 'drillAlias' => 't2', 'drillField' => 'name', 'queryField' => 'executionname'),
                array('drillObject' => 'zt_project', 'drillAlias' => 't3', 'drillField' => 'name', 'queryField' => 'projectname'),
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'type', 'queryField' => 'type')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1028,
    'version'     => '1',
    'name'        => array('zh-cn' => 'Tabla de estadísticas de soluciones de Bug por producto', 'zh-tw' => 'Tabla de estadísticas de soluciones de Bug por producto', 'en' => 'Bug Solution of Product'),
    'code'        => 'productBugSolution',
    'desc'        => array('zh-cn' => 'Muestra la distribución de las soluciones de los Bug por producto.', 'zh-tw' => 'Muestra la distribución de las soluciones de los Bug por producto.', 'en' => 'Solution distribution of bugs.'),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '59,61',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select t1.product,t2.name,t1.id as bugID,t1.resolution from zt_bug as t1
left join zt_product as t2 on t2.id=t1.product
left join zt_project as t3 on t2.program=t3.id
where t2.deleted='0' and t1.deleted='0'
and t2.shadow='0'
and t1.resolution != ''
and (case when \$productStatus='' then 1=1 else t2.status=\$productStatus end)
and (case when \$productType='' then 1=1 else t2.type=\$productType end)
and (case when \$product='0' then 1=1 else t2.id=\$product end)
order by t3.`order` asc, t2.line desc, t2.`order` asc
EOT,
    'settings'  => array
    (
        'group1'      => 'product',
        'columnTotal' => 'sum',
        'columns'     => array
        (
            array('field' => 'resolution', 'slice' => 'resolution', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => '0', 'showOrigin' => 0)
        ),
        'summary'     => 'use'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'productStatus', 'name' => 'Estado del producto', 'type' => 'select', 'typeOption' => 'product.status', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'productType', 'name' => 'Tipo de producto', 'type' => 'select', 'typeOption' => 'product.type', 'default' => 'normal'),
        array('from' => 'query', 'field' => 'product', 'name' => 'Lista de productos', 'type' => 'select', 'typeOption' => 'product', 'default' => '0')
    ),
    'fields'    => array
    (
        'product'    => array('object' => 'product', 'field' => 'name', 'type' => 'object'),
        'name'       => array('object' => 'product', 'field' => 'name', 'type' => 'string'),
        'bugID'      => array('object' => 'bug', 'field' => 'id', 'type' => 'number'),
        'resolution' => array('object' => 'bug', 'field' => 'resolution', 'type' => 'option')
    ),
    'langs'     => array
    (
        'product'    => array('zh-cn' => 'Nombre del producto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'name'       => array('zh-cn' => 'Nombre del producto', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'bugID'      => array('zh-cn' => 'bugID', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'resolution' => array('zh-cn' => 'Solución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array(),
    'drills'    => array
    (
        array
        (
            'field'     => 'resolution',
            'object'    => 'bug',
            'whereSql'  => " where t1.deleted='0' and t1.resolution != ''",
            'condition' => array
            (
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'resolution', 'queryField' => 'resolution'),
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'product', 'queryField' => 'product')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);

$config->bi->builtin->pivots[] = array
(
    'id'          => 1025,
    'version'     => '1.1',
    'name'        => array('zh-cn' => 'Tabla de Bug resueltos', 'zh-tw' => 'Tabla de Bug resueltos', 'en' => 'Solved Bugs', 'de' => 'Solved Bugs', 'fr' => 'Solved Bugs'),
    'code'        => 'slovedBugs',
    'desc'        => array('zh-cn' => 'Lista el total de Bug resueltos, la distribución de soluciones y la proporción (la cantidad de Bug resueltos por ese usuario respecto a todos los Bug resueltos).', 'zh-tw' => 'Lista el total de Bug resueltos, la distribución de soluciones y la proporción (la cantidad de Bug resueltos por ese usuario respecto a todos los Bug resueltos).', 'en' => 'percentage:self resolved / all resolved', 'de' => 'percentage:self resolved / all resolved', 'fr' => 'percentage:self resolved / all resolved'),
    'dimension'   => '1',
    'driver'      => 'mysql',
    'group'       => '61',
    'createdDate' => '2009-03-14',
    'sql'         => <<<EOT
select
    t1.`resolvedBy`,t1.resolution
from zt_bug as t1
left join zt_product as t2 on t1.product = t2.id
where t1.deleted='0'
and t2.deleted='0'
and t1.resolution!=''
and (case when \$startDate='' then 1=1 else cast(t1.`resolvedDate` as date)>=cast(\$startDate as date) end)
and (case when \$endDate='' then 1=1 else cast(t1.`resolvedDate` as date)<=cast(\$endDate as date) end)
and (case when \$product = '' then 1=1 else t1.product=\$product end)
and not (\$product='0' and \$startDate='' and \$endDate='')
EOT,
    'settings'  => array
    (
        'summary'     => 'use',
        'columns'     => array
        (
            array('field' => 'resolution', 'slice' => 'resolution', 'stat' => 'count', 'showTotal' => 'sum', 'showMode' => 'default', 'monopolize' => 1, 'showOrigin' => 0)
        ),
        'columnTotal' => 'sum',
        'group1'      => 'resolvedBy'
    ),
    'filters'   => array
    (
        array('from' => 'query', 'field' => 'product', 'name' => 'Producto', 'type' => 'select', 'typeOption' => 'product', 'default' => '0'),
        array('from' => 'query', 'field' => 'startDate', 'name' => 'Inicio de la fecha de resolución', 'type' => 'date', 'typeOption' => '', 'default' => '$MONTHBEGIN'),
        array('from' => 'query', 'field' => 'endDate', 'name' => 'Fin de la fecha de resolución', 'type' => 'date', 'typeOption' => '', 'default' => '$MONTHEND')
    ),
    'fields'    => array
    (
        'resolvedBy'     => array('object' => 'bug', 'field' => 'resolvedBy', 'type' => 'user'),
        'resolution'     => array('object' => 'bug', 'field' => 'resolution', 'type' => 'option')
    ),
    'langs'     => array
    (
        'resolvedBy'     => array('zh-cn' => 'Resuelto por', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => ''),
        'resolution'     => array('zh-cn' => 'Bug por solución', 'zh-tw' => '', 'en' => '', 'de' => '', 'fr' => '')
    ),
    'vars'      => array
    (
        'varName'     => array('product', 'startDate', 'endDate'),
        'showName'    => array('Producto', 'Inicio de la fecha de resolución', 'Fin de la fecha de resolución'),
        'requestType' => array('select', 'date', 'date'),
        'selectList'  => array('product', 'user', 'user'),
        'default'     => array('', '$MONTHBEGIN', '$MONTHEND')
    ),
    'drills'    => array
    (
        array
        (
            'field'     => 'resolution',
            'object'    => 'bug',
            'whereSql'  => "left join zt_product as t2 on t1.product = t2.id WHERE t1.deleted='0' AND t1.resolution!=''  and (case when \$startDate='' then 1=1 else cast(t1.`resolvedDate` as date)>=cast(\$startDate as date) end)  and (case when \$endDate='' then 1=1 else cast(t1.`resolvedDate` as date)<=cast(\$endDate as date) end)  and (case when \$product = '' then 1=1 else t1.product=\$product end)",
            'condition' => array
            (
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'resolvedBy', 'queryField' => 'resolvedBy'),
                array('drillObject' => 'zt_bug', 'drillAlias' => 't1', 'drillField' => 'resolution', 'queryField' => 'resolution')
            )
        )
    ),
    'stage'     => 'published',
    'builtin'   => '1'
);
