<?php
$config->bi->builtin->metrics = array();

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de programas de todos los niveles por sistema',
    'alias'      => 'Total de programas de todos los niveles',
    'code'       => 'count_of_program',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'program',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de programas de todos los niveles por sistema indica la cantidad de programas en toda la organización. Esta métrica refleja el número de programas que gestiona la organización y puede usarse como indicador del tamaño y la complejidad de la organización.',
    'definition' => "所有项目集的个数求和\n过滤已删除的项目集"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Programas en curso de todos los niveles por sistema',
    'alias'      => 'Programas en curso de todos los niveles',
    'code'       => 'count_of_doing_program',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'program',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los programas en curso de todos los niveles por sistema indican la cantidad de programas que se encuentran actualmente en curso. Esta métrica refleja cuántos programas está ejecutando la organización y puede usarse para evaluar el avance de la gestión de programas y la asignación de recursos.',
    'definition' => "所有项目集的个数求和\n状态为进行中\n过滤已删除的项目集"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Programas cerrados de todos los niveles por sistema',
    'alias'      => 'Programas cerrados de todos los niveles',
    'code'       => 'count_of_closed_program',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'program',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los programas cerrados de todos los niveles por sistema reflejan la cantidad de programas cerrados en el sistema y sirven para evaluar los resultados de la gestión a nivel de programas de la organización.',
    'definition' => "所有项目集的个数求和\n状态为已关闭\n过滤已删除的项目集"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Programas suspendidos de todos los niveles por sistema',
    'alias'      => 'Programas suspendidos de todos los niveles',
    'code'       => 'count_of_suspended_program',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'program',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los programas suspendidos de todos los niveles por sistema reflejan la cantidad de programas detenidos o aplazados temporalmente por algún motivo y sirven para evaluar los riesgos y la incertidumbre a nivel de programas de la organización.',
    'definition' => "所有项目集的个数求和\n状态为已挂起\n过滤已删除的项目集"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Programas sin iniciar de todos los niveles por sistema',
    'alias'      => 'Programas sin iniciar de todos los niveles',
    'code'       => 'count_of_wait_program',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'program',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los programas sin iniciar de todos los niveles por sistema reflejan la cantidad de programas que aún no han arrancado y sirven para evaluar el trabajo de planeación o reserva a nivel de programas de la organización.',
    'definition' => "所有项目集的个数求和\n状态为未开始\n过滤已删除的项目集"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de programas de primer nivel por sistema',
    'alias'      => 'Total de programas de primer nivel',
    'code'       => 'count_of_top_program',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'program',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de programas de primer nivel por sistema refleja la cantidad y la situación de los programas asociados a los distintos objetivos estratégicos de la organización. Sirve para evaluar aspectos clave como la orientación estratégica, las prioridades, la asignación de recursos y la capacidad de gestión, y es un medio importante para alcanzar el éxito a largo plazo.',
    'definition' => "所有一级项目集的个数求和\n过滤已删除的项目集"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Programas de primer nivel cerrados por sistema',
    'alias'      => 'Programas de primer nivel cerrados',
    'code'       => 'count_of_closed_top_program',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'program',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los programas de primer nivel cerrados por sistema reflejan la cantidad y la situación de los programas asociados a los distintos objetivos estratégicos y sirven para evaluar el desempeño y los resultados de la gestión de los objetivos estratégicos de programas de la organización.',
    'definition' => "所有一级项目集的个数求和\n状态为已关闭\n过滤已删除的项目集"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Programas de primer nivel sin cerrar por sistema',
    'alias'      => 'Programas de primer nivel sin cerrar',
    'code'       => 'count_of_unclosed_top_program',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'program',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los programas de primer nivel sin cerrar por sistema reflejan la cantidad y la situación de los programas asociados a los distintos objetivos estratégicos y sirven para evaluar el avance y los retos de los objetivos estratégicos de programas en curso de la organización.',
    'definition' => "复用：\n按系统统计的一级项目集总数\n按系统统计的已关闭一级项目集数\n公式：按系统统计的未关闭一级项目集数=按系统统计的一级项目集总数-按系统统计的已关闭一级项目集数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Programas de primer nivel nuevos en el año por sistema',
    'alias'      => 'Programas de primer nivel nuevos',
    'code'       => 'count_of_annual_created_top_program',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'program',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los programas de primer nivel nuevos en el año por sistema reflejan la cantidad y la situación de los programas asociados a los distintos objetivos estratégicos que se agregan cada año y sirven para evaluar aspectos clave recientes como la orientación estratégica, las prioridades, la asignación de recursos y la capacidad de gestión de la organización.',
    'definition' => "所有的一级项目集的个数求和\n创建时间为某年\n过滤已删除的项目集"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Programas de primer nivel cerrados en el año por sistema',
    'alias'      => 'Programas de primer nivel cerrados',
    'code'       => 'count_of_annual_closed_top_program',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'program',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los programas de primer nivel cerrados en el año por sistema reflejan la cantidad y la situación de los programas asociados a los distintos objetivos estratégicos que finalizan cada año y sirven para evaluar el desempeño y los resultados de la gestión de los objetivos estratégicos de la organización.',
    'definition' => "所有的一级项目集的个数求和\n关闭时间为某年\n状态为已关闭\n过滤已删除的项目集"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de líneas de producto por sistema',
    'alias'      => 'Total de líneas de producto',
    'code'       => 'count_of_line',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'line',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de líneas de producto por sistema refleja la cantidad y la amplitud de las líneas de producto de la organización y sirve para evaluar su estrategia de portafolio de productos y la dirección del desarrollo del negocio.',
    'definition' => "所有产品线的个数求和\n过滤已删除的产品线"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de productos por sistema',
    'alias'      => 'Total de productos',
    'code'       => 'count_of_product',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'product',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de productos por sistema refleja la cantidad de productos en el sistema y sirve para evaluar la cantidad y la diversidad de los productos de la organización.',
    'definition' => "所有产品的个数求和\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Productos normales por sistema',
    'alias'      => 'Productos normales',
    'code'       => 'count_of_normal_product',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'product',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de productos normales por sistema refleja el número de productos de la organización que se encuentran en estado normal de desarrollo y operación, y sirve para evaluar la capacidad de desarrollo de productos y de operación sostenida de la organización.',
    'definition' => "所有产品的个数求和\n状态为正常\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Productos finalizados por sistema',
    'alias'      => 'Productos finalizados',
    'code'       => 'count_of_closed_product',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'product',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de productos finalizados por sistema refleja el número de productos de la organización cuyo desarrollo y operación ya se detuvieron, y sirve para evaluar la gestión del ciclo de vida de los productos y los ajustes estratégicos de la organización.',
    'definition' => "所有产品的个数求和\n状态为结束\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Productos nuevos en el año por sistema',
    'alias'      => 'Productos nuevos',
    'code'       => 'count_of_annual_created_product',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'product',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'La cantidad de productos nuevos en el año por sistema refleja el número de productos que la organización agrega cada año y sirve para evaluar su capacidad de innovación de productos y su expansión en el mercado.',
    'definition' => "所有的产品个数求和\n创建时间为某年\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Productos finalizados en el año por sistema',
    'alias'      => 'Productos finalizados en el año',
    'code'       => 'count_of_annual_closed_product',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'product',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'La cantidad de productos finalizados en el año por sistema refleja el número de productos cuyo desarrollo y operación la organización detiene cada año, y sirve para evaluar los ajustes del portafolio de productos y la transformación estratégica de la organización.',
    'definition' => "所有的产品个数求和\n关闭时间为某年\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de proyectos por sistema',
    'alias'      => 'Total de proyectos',
    'code'       => 'count_of_project',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de proyectos por sistema es la cantidad total de proyectos que existen actualmente en el sistema. Esta métrica ayuda al equipo a conocer el tamaño actual de los proyectos y la carga de trabajo, y es uno de los datos básicos de la gestión de proyectos.',
    'definition' => "所有的项目个数求和\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos sin iniciar por sistema',
    'alias'      => 'Proyectos sin iniciar',
    'code'       => 'count_of_wait_project',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los proyectos sin iniciar por sistema son la cantidad de proyectos que actualmente no han comenzado en el sistema. Esta métrica ayuda al equipo a conocer cuántos proyectos deben arrancar y la planeación de proyectos futuros.',
    'definition' => "所有的项目个数求和\n状态为未开始\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos en curso por sistema',
    'alias'      => 'Proyectos en curso',
    'code'       => 'count_of_doing_project',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los proyectos en curso por sistema son la cantidad de proyectos que actualmente están en curso en el sistema. Esta métrica ayuda al equipo a conocer la carga de trabajo actual y la asignación de recursos, así como el avance y la eficiencia en la ejecución de los proyectos.',
    'definition' => "所有的项目个数求和\n状态为进行中\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos suspendidos por sistema',
    'alias'      => 'Proyectos suspendidos',
    'code'       => 'count_of_suspended_project',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los proyectos suspendidos por sistema son la cantidad de proyectos pausados o detenidos por algún motivo. Esta métrica ayuda al equipo a conocer cuántos proyectos suspendidos existen y sus causas, para hacer los ajustes y las resoluciones apropiadas.',
    'definition' => "所有的项目个数求和\n状态为已挂起\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos cerrados por sistema',
    'alias'      => 'Proyectos cerrados',
    'code'       => 'count_of_closed_project',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los proyectos cerrados por sistema son la cantidad de proyectos que ya se completaron y cerraron. Esta métrica ayuda al equipo a conocer cuántos proyectos se han completado y el estado general de la ejecución de proyectos.',
    'definition' => "所有的项目个数求和\n状态为已关闭\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos sin cerrar por sistema',
    'alias'      => 'Proyectos sin cerrar',
    'code'       => 'count_of_unclosed_project',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los proyectos sin cerrar por sistema son la cantidad de proyectos que actualmente no han comenzado o siguen en curso en el sistema. Esta métrica permite medir la eficiencia de la gestión y la ejecución de proyectos.',
    'definition' => "复用：\n按系统统计的已关闭项目数\n按系统统计的项目总数\n公式：\n按系统统计的未关闭项目数=按系统统计的项目总数-按系统统计的已关闭项目数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos completados a tiempo entre los proyectos completados por sistema',
    'alias'      => 'Proyectos completados a tiempo entre los proyectos completados',
    'code'       => 'count_of_undelayed_finished_project_which_finished',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los proyectos completados a tiempo entre los proyectos completados por sistema son la cantidad de proyectos finalizados dentro del plazo previsto. Esta métrica ayuda al equipo a evaluar su gestión del tiempo y su capacidad de ejecución. Una cantidad alta de proyectos completados a tiempo indica que el equipo puede entregar a tiempo, lo que ayuda a mantener el avance de los proyectos y la satisfacción del cliente.',
    'definition' => "所有的项目个数求和\n状态为已关闭\n完成日期<=项目启动时的计划截止日期\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos completados con retraso entre los proyectos completados por sistema',
    'alias'      => 'Proyectos completados con retraso entre los proyectos completados',
    'code'       => 'count_of_delayed_finished_project_which_finished',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los proyectos completados con retraso entre los proyectos completados por sistema son la cantidad de proyectos finalizados después del plazo previsto. Esta métrica ayuda al equipo a evaluar su gestión del tiempo y su capacidad de ejecución, e identificar las causas del retraso para tomar las medidas adecuadas. Una cantidad alta de proyectos completados con retraso puede requerir que el equipo preste atención a la planeación del proyecto y a la asignación de recursos.',
    'definition' => "所有的项目个数求和\n状态为已关闭\n完成日期>项目启动时的计划截止日期\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos nuevos en el año por sistema',
    'alias'      => 'Proyectos nuevos',
    'code'       => 'count_of_annual_created_project',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los proyectos nuevos en el año por sistema son la cantidad de proyectos creados en un año determinado. Esta métrica ayuda al equipo a conocer el tamaño de los proyectos y la carga de trabajo de ese año, así como las necesidades de gestión de proyectos y de asignación de recursos. Una cantidad alta de proyectos nuevos en el año puede requerir que el equipo gestione prioridades y planeación según sus recursos y capacidad.',
    'definition' => "所有的项目个数求和\n创建时间为某年\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos cerrados en el año por sistema',
    'alias'      => 'Proyectos cerrados',
    'code'       => 'count_of_annual_closed_project',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los proyectos cerrados en el año por sistema son la cantidad de proyectos cerrados en un año determinado. Esta métrica ayuda al equipo a conocer la situación de ejecución y los resultados de los proyectos de ese año, y a evaluar su capacidad de entrega de proyectos. Una cantidad alta de proyectos cerrados en el año indica que el equipo tiene una alta eficiencia en la entrega de proyectos.',
    'definition' => "所有的项目个数求和\n关闭时间为某年\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos completados a tiempo entre los proyectos iniciados en el año por sistema',
    'alias'      => 'Proyectos completados a tiempo entre los proyectos iniciados',
    'code'       => 'count_of_undelayed_finished_project_which_annual_started',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los proyectos completados a tiempo entre los proyectos iniciados en el año por sistema son la cantidad de proyectos, de los iniciados en un año determinado, que se cerraron dentro del plazo previsto. Esta métrica ayuda al equipo a evaluar su gestión del tiempo y su capacidad de ejecución en ese año, y a medir el avance y el efecto de la entrega de los proyectos. Una cantidad alta de proyectos cerrados a tiempo indica que el equipo puede entregar a tiempo, lo que ayuda a mantener el curso normal de los proyectos y la satisfacción del cliente.',
    'definition' => "所有的项目个数求和\n启动时间为某年\n完成日期<=项目启动时的计划截止日期（根据历史记录推算）\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos completados con retraso entre los proyectos completados en el año por sistema',
    'alias'      => 'Proyectos completados con retraso entre los proyectos completados',
    'code'       => 'count_of_delayed_finished_project_which_annual_finished',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los proyectos completados con retraso entre los proyectos completados en el año por sistema son la cantidad de proyectos, de los completados en un año determinado, que se cerraron después del plazo previsto. Esta métrica ayuda al equipo a evaluar su gestión del tiempo y su capacidad de ejecución en ese año, e identificar las causas del retraso para tomar las medidas adecuadas. Una cantidad alta de proyectos cerrados con retraso puede requerir que el equipo preste atención a la planeación del proyecto y a la asignación de recursos.',
    'definition' => "复用：\n按系统统计的年度关闭项目数\n按系统统计的每年完成项目中按期完成项目数\n公式：\n按系统统计的年度延期完成项目数=按系统统计的年度关闭项目数-按系统统计的每年完成项目中按期完成项目数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos completados a tiempo entre los proyectos completados en el año por sistema',
    'alias'      => 'Proyectos completados a tiempo entre los proyectos completados',
    'code'       => 'count_of_undelayed_finished_project_which_annual_finished',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los proyectos completados a tiempo entre los proyectos completados en el año por sistema son la cantidad de proyectos, de los completados en un año determinado, que se cerraron dentro del plazo previsto. Esta métrica ayuda al equipo a evaluar su gestión del tiempo y su capacidad de ejecución en ese año, y a medir el avance y el efecto de la entrega de los proyectos. Una cantidad alta de proyectos cerrados a tiempo indica que el equipo puede entregar a tiempo, lo que ayuda a mantener el curso normal de los proyectos y la satisfacción del cliente.',
    'definition' => "所有的项目个数求和\n关闭时间为某年\n完成日期<=项目启动时的计划截止日期\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos nuevos en el mes por sistema',
    'alias'      => 'Proyectos nuevos',
    'code'       => 'count_of_monthly_created_project',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Los proyectos nuevos en el mes por sistema son la cantidad de proyectos creados en un mes determinado. Esta métrica ayuda al equipo a conocer el tamaño de los proyectos y la carga de trabajo de ese año, así como las necesidades de gestión de proyectos y de asignación de recursos. Una cantidad alta de proyectos nuevos en el año puede requerir que el equipo gestione prioridades y planeación según sus recursos y capacidad.',
    'definition' => "所有的项目个数求和\n创建时间为某年某月\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos cerrados en el mes por sistema',
    'alias'      => 'Proyectos cerrados',
    'code'       => 'count_of_monthly_closed_project',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Los proyectos cerrados en el año por sistema son la cantidad de proyectos cerrados en un mes determinado. Esta métrica ayuda al equipo a conocer la situación de ejecución y los resultados de los proyectos de ese año, y a evaluar su capacidad de entrega de proyectos. Una cantidad alta de proyectos cerrados en el año indica que el equipo tiene una alta eficiencia en la entrega de proyectos.',
    'definition' => "所有的项目个数求和\n关闭时间为某年某月\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proyectos completados en el año por sistema',
    'alias'      => 'Proyectos completados',
    'code'       => 'count_of_annual_finished_project',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los proyectos completados en el año por sistema son la cantidad de proyectos completados y cerrados en un año determinado. Reflejan la situación de ejecución y los resultados de los proyectos del equipo en ese año y permiten evaluar su capacidad de entrega de proyectos. Una cantidad alta de proyectos completados en el año indica que el equipo tiene una alta eficiencia en la entrega de proyectos.',
    'definition' => "所有的项目个数求和\n实际完成时间为某年\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas estimadas de las tareas de proyectos cerrados en el año por sistema',
    'alias'      => 'Horas estimadas de las tareas de proyectos cerrados',
    'code'       => 'estimate_of_annual_closed_project',
    'purpose'    => 'hour',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las horas estimadas de las tareas de proyectos cerrados en el año por sistema son el total de horas de trabajo que se estimó necesario invertir en los proyectos cerrados en un año determinado. Esta métrica sirve para evaluar la planeación de horas y la precisión de las estimaciones del equipo o la organización en la finalización de tareas. Unas horas estimadas anuales más precisas ayudan al equipo a organizar mejor los recursos y el tiempo, y a mejorar la eficiencia de finalización de tareas y el control del avance.',
    'definition' => "所有项目任务的预计工时数求和\n项目状态为已关闭\n关闭时间为某年\n过滤父任务\n过滤已删除的任务\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas consumidas de las tareas de proyectos cerrados en el año por sistema',
    'alias'      => 'Horas consumidas de las tareas de proyectos cerrados',
    'code'       => 'consume_of_annual_closed_project',
    'purpose'    => 'hour',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'hour',
    'dateType'   => 'year',
    'desc'       => 'Las horas consumidas de las tareas de proyectos cerrados en el año por sistema son el total de horas de trabajo consumidas por las tareas de los proyectos cerrados en un año determinado. Esta métrica sirve para evaluar la inversión de horas del equipo o la organización durante la ejecución de tareas y la eficiencia en el uso de recursos. Unas horas consumidas anuales altas en proyectos cerrados pueden requerir revisar el flujo de trabajo y la asignación de recursos para mejorar la eficiencia y el control del avance.',
    'definition' => "所有项目任务的消耗工时数求和\n项目状态为已关闭\n关闭时间为某年\n过滤父任务\n过滤已删除的任务\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas consumidas de las tareas de proyectos cerrados en el mes por sistema',
    'alias'      => 'Horas consumidas de las tareas de proyectos cerrados',
    'code'       => 'consume_of_monthly_closed_project',
    'purpose'    => 'hour',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'hour',
    'dateType'   => 'month',
    'desc'       => 'Las horas consumidas de las tareas de proyectos cerrados en el mes por sistema son el total de horas de trabajo que se estimó necesario invertir en las tareas de un mes determinado. Esta métrica sirve para evaluar la inversión de horas del equipo o la organización durante la ejecución de tareas y la eficiencia en el uso de recursos. Unas horas consumidas mensuales altas en proyectos cerrados pueden requerir revisar el flujo de trabajo y la asignación de recursos para mejorar la eficiencia y el control del avance.',
    'definition' => "所有项目任务消耗工时数求和\n项目状态为已关闭\n关闭时间为某年某月\n过滤父任务\n过滤已删除的任务\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de días-persona invertidos en proyectos cerrados en el año por sistema',
    'alias'      => 'Total de días-persona invertidos en proyectos cerrados',
    'code'       => 'day_of_annual_closed_project',
    'purpose'    => 'hour',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'manday',
    'dateType'   => 'year',
    'desc'       => 'El total de días-persona invertidos en proyectos cerrados en el año por sistema es el número total de días-persona invertidos en los proyectos cerrados en un año determinado. Esta métrica sirve para evaluar la inversión de recursos humanos en los proyectos. Un aumento del total de días-persona puede significar un aumento del tiempo de trabajo y de los recursos invertidos en los proyectos.',
    'definition' => "复用：\n按系统统计的年度关闭项目消耗工时数\n公式：\n按系统统计的年度关闭项目投入总人天=按系统统计的年度已关闭项目任务的消耗工时数/后台配置的每天可用工时"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de proyectos completados a tiempo entre los proyectos completados en el año por sistema',
    'alias'      => 'Tasa de proyectos completados a tiempo entre los proyectos completados',
    'code'       => 'rate_of_undelayed_finished_project_which_annual_finished',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'La tasa de proyectos completados a tiempo entre los proyectos completados en el año por sistema es la razón entre la cantidad de proyectos completados a tiempo y la cantidad de proyectos cerrados, entre los proyectos completados en el año por sistema. Esta métrica ayuda al equipo a evaluar la capacidad y el efecto del cierre a tiempo de los proyectos en un año determinado, y es uno de los indicadores de desempeño de la gestión de proyectos. Una tasa alta de cumplimiento a tiempo indica que el equipo puede completar los proyectos a tiempo, lo que refleja una alta capacidad de gestión y entrega de proyectos.',
    'definition' => "复用：\n按系统统计的年度关闭项目数\n按系统统计的年度完成项目中项目的按期完成率\n公式：\n按系统统计的年度项目按期关闭率=按系统统计的年度按时关闭项目数/按系统统计的年度关闭项目数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de proyectos completados con retraso entre los proyectos completados en el año por sistema',
    'alias'      => 'Tasa de proyectos completados con retraso entre los proyectos completados',
    'code'       => 'rate_of_delayed_finished_project_which_annual_finished',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'project',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'La tasa de proyectos completados con retraso entre los proyectos completados en el año por sistema es la razón entre la cantidad de proyectos completados con retraso y la cantidad de proyectos cerrados, entre los proyectos completados en el año por sistema. Esta métrica ayuda al equipo a evaluar la capacidad y el efecto del cierre a tiempo de los proyectos en un año determinado, y es uno de los indicadores de desempeño de la gestión de proyectos. Una tasa alta de retraso puede requerir que el equipo preste atención a la planeación del proyecto y a la asignación de recursos.',
    'definition' => "复用：\n按系统统计的年度关闭项目数\n按系统统计的年度延期关闭项目数\n公式：\n按系统统计的年度项目延期关闭率=按系统统计的年度延期关闭项目数/按系统统计的年度关闭项目数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de planes por sistema',
    'alias'      => 'Total de planes',
    'code'       => 'count_of_productplan',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'productplan',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de planes por sistema refleja la cantidad de planes en curso y completados de la organización. Sirve para evaluar la eficiencia de la planeación, prever las necesidades de recursos, optimizar la organización y la coordinación de proyectos, y para la evaluación del desempeño y la definición de objetivos.',
    'definition' => "所有的计划的个数求和\n过滤已删除的计划"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Planes nuevos en el año por sistema',
    'alias'      => 'Planes nuevos',
    'code'       => 'count_of_annual_created_productplan',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'productplan',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'La cantidad de planes nuevos en el año por sistema refleja el número de planes que la organización agregó en un año determinado. Sirve para evaluar la capacidad de innovación, la competitividad en el mercado y las decisiones de inversión de la organización, y para la evaluación del desempeño y la definición de objetivos.',
    'definition' => "所有的计划个数求和\n创建时间为某年\n过滤已删除的计划"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Planes completados en el año por sistema',
    'alias'      => 'Planes completados',
    'code'       => 'count_of_annual_finished_productplan',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'productplan',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'La cantidad de planes completados en el año por sistema refleja el número de planes que la organización efectivamente completó en un año determinado. Sirve para evaluar el desempeño, la eficiencia de producción y la satisfacción del cliente, y para la planeación y la optimización de recursos.',
    'definition' => "所有的计划个数求和\n完成时间为某年\n过滤已删除的计划"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Planes cerrados en el año por sistema',
    'alias'      => 'Planes cerrados',
    'code'       => 'count_of_annual_closed_productplan',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'productplan',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'La cantidad de planes cerrados en el año por sistema refleja el número de planes que la organización cerró en un año determinado. Sirve para evaluar la eficacia de la gestión de planes, la optimización de recursos y el control de costos de la organización, y aporta oportunidades de aprendizaje y referencia para optimizar el portafolio de productos.',
    'definition' => "所有的计划个数求和\n关闭时间为某年\n过滤已删除的计划"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Planes completados por sistema',
    'alias'      => 'Planes completados',
    'code'       => 'count_of_finished_productplan',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'productplan',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de planes completados por sistema refleja el número de planes que la organización ya completó en un año determinado. Sirve para evaluar el desempeño, la eficiencia de producción y la satisfacción del cliente de la organización, y para la planeación y la optimización de recursos.',
    'definition' => "所有计划的个数求和\n状态为已完成\n过滤已删除的计划"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Planes sin completar por sistema',
    'alias'      => 'Planes sin completar',
    'code'       => 'count_of_unfinished_productplan',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'productplan',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de planes de producto sin completar por sistema refleja el número de planes de producto que la organización no logró completar en un año determinado. Sirve para evaluar el desempeño, la gestión de recursos y el control de riesgos de la organización, y para la planeación y la mejora.',
    'definition' => "复用：\n按系统统计的已完成计划数\n按系统统计的计划总数\n公式：\n按系统统计的未完成计划数=按系统统计的计划总数-按系统统计的已完成计划数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de ejecuciones por sistema',
    'alias'      => 'Total de ejecuciones',
    'code'       => 'count_of_execution',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de ejecuciones por sistema indica la cantidad de elementos de ejecución en todo el sistema y puede usarse para evaluar el tamaño de los proyectos y el volumen total de tareas.',
    'definition' => "所有的执行个数求和\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones sin iniciar por sistema',
    'alias'      => 'Ejecuciones sin iniciar',
    'code'       => 'count_of_wait_execution',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las ejecuciones sin iniciar por sistema indican la cantidad de tareas que aún no han comenzado su ejecución en todo el sistema y pueden usarse para conocer la cantidad de tareas pendientes.',
    'definition' => "所有的执行个数求和\n状态为未开始\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones en curso por sistema',
    'alias'      => 'Ejecuciones en curso',
    'code'       => 'count_of_doing_execution',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las ejecuciones en curso por sistema indican la cantidad de elementos de ejecución que están en curso en todo el sistema. Pueden usarse para conocer la cantidad de tareas en curso actualmente y reflejan el avance del trabajo del equipo.',
    'definition' => "所有的执行个数求和\n状态为进行中\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones suspendidas por sistema',
    'alias'      => 'Ejecuciones suspendidas',
    'code'       => 'count_of_suspended_execution',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las ejecuciones suspendidas por sistema indican la cantidad de elementos de ejecución que se han suspendido en todo el sistema. Pueden usarse para conocer la cantidad de tareas en pausa, lo cual puede deberse a requerimientos poco claros u otros motivos.',
    'definition' => "所有的执行个数求和\n状态为已挂起\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones cerradas por sistema',
    'alias'      => 'Ejecuciones cerradas',
    'code'       => 'count_of_closed_execution',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las ejecuciones cerradas por sistema indican la cantidad de elementos de ejecución que se han cerrado en todo el sistema. Pueden usarse para conocer el avance de la ejecución.',
    'definition' => "所有的执行个数求和\n状态为已关闭\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones sin cerrar por sistema',
    'alias'      => 'Ejecuciones sin cerrar',
    'code'       => 'count_of_unclosed_execution',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las ejecuciones sin cerrar por sistema indican la cantidad de elementos de ejecución que no se han cerrado en todo el sistema. Pueden usarse para conocer el avance de la ejecución.',
    'definition' => "复用：\n按系统统计的执行总数\n按系统统计的已关闭执行数\n公式：\n按系统统计的未关闭执行数=按系统统计的执行总数-按系统统计的已关闭执行数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones nuevas en el año por sistema',
    'alias'      => 'Ejecuciones nuevas',
    'code'       => 'count_of_annual_created_execution',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las ejecuciones nuevas en el año por sistema son la cantidad de ejecuciones agregadas en un año determinado. Esta métrica refleja el volumen de trabajo de un equipo o una organización en ese año. Una cantidad alta de ejecuciones nuevas en el año puede indicar que el equipo enfrenta más tareas y retos, y que requiere más recursos y esfuerzo para completar las ejecuciones. Además, en la gestión de proyectos, esta métrica también puede servir como base para la toma de decisiones de gestión.',
    'definition' => "所有的执行个数求和\n创建时间为某年\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones cerradas en el año por sistema',
    'alias'      => 'Ejecuciones cerradas',
    'code'       => 'count_of_annual_closed_execution',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las ejecuciones cerradas en el año por sistema son la cantidad de ejecuciones cuya fecha de cierre corresponde a un año determinado. Esta métrica puede reflejar la eficiencia de trabajo de un equipo o una organización en ese año. Una cantidad alta de ejecuciones cerradas en el año puede indicar que el equipo o la organización muestra una alta eficiencia al completar tareas; de lo contrario, puede requerir revisar el flujo de trabajo y la asignación de recursos para mejorar la eficiencia de ejecución.',
    'definition' => "所有的执行个数求和\n关闭时间为某年\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones completadas en el año por sistema',
    'alias'      => 'Ejecuciones completadas',
    'code'       => 'count_of_annual_finished_execution',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las ejecuciones completadas en el año por sistema son la cantidad de ejecuciones que ya se completaron en un año determinado. Esta métrica refleja la eficiencia de trabajo y la capacidad de finalización de un equipo o una organización en ese año. Una cantidad alta de ejecuciones completadas en el año indica que el equipo o la organización muestra una alta eficiencia al completar tareas; de lo contrario, puede requerir revisar el flujo de trabajo y la asignación de recursos para mejorar la eficiencia de ejecución.',
    'definition' => "所有的执行个数求和\n实际完成日期为某年\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones nuevas en el mes por sistema',
    'alias'      => 'Ejecuciones nuevas',
    'code'       => 'count_of_monthly_created_execution',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Las ejecuciones nuevas en el mes por sistema son la cantidad de ejecuciones agregadas en un mes determinado. Esta métrica refleja las nuevas tareas o la carga de trabajo que enfrenta un equipo o una organización en ese mes. Una cantidad alta de ejecuciones nuevas en el mes puede indicar que el equipo necesita adaptarse rápidamente a las nuevas tareas y ajustar los recursos a tiempo para satisfacer la demanda.',
    'definition' => "所有的执行个数求和\n创建时间为某年某月\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones cerradas en el mes por sistema',
    'alias'      => 'Ejecuciones cerradas',
    'code'       => 'count_of_monthly_closed_execution',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Las ejecuciones completadas en el mes por sistema son la cantidad de ejecuciones que ya se cerraron en un mes determinado. Esta métrica refleja la eficiencia de trabajo y la capacidad de finalización de un equipo o una organización en ese mes. Una cantidad alta de ejecuciones completadas en el mes indica que el equipo o la organización muestra una alta eficiencia al completar tareas rápidamente; de lo contrario, puede requerir revisar el flujo de trabajo y la asignación de recursos para mejorar la eficiencia de ejecución.',
    'definition' => "所有的执行个数求和\n关闭时间为某年某月\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones completadas a tiempo entre las ejecuciones completadas por sistema',
    'alias'      => 'Ejecuciones completadas a tiempo entre las ejecuciones completadas',
    'code'       => 'count_of_undelayed_finished_execution_which_finished',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las ejecuciones completadas a tiempo entre las ejecuciones completadas por sistema indican la cantidad de ejecuciones finalizadas dentro del plazo en todo el sistema y pueden usarse para evaluar la capacidad y la eficiencia de ejecución del equipo.',
    'definition' => "所有的执行个数求和\n状态为已关闭\n关闭日期<=执行开始时计划截止日期\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones completadas con retraso entre las ejecuciones completadas por sistema',
    'alias'      => 'Ejecuciones completadas con retraso entre las ejecuciones completadas',
    'code'       => 'count_of_delayed_finished_execution_which_finished',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las ejecuciones completadas con retraso entre las ejecuciones completadas por sistema indican la cantidad de elementos de ejecución finalizados con retraso en todo el sistema y pueden usarse para evaluar los retrasos de las tareas y la capacidad de ejecución del equipo.',
    'definition' => "所有的执行个数求和\n状态为已关闭\n关闭日期>执行开始时计划截止日期\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones completadas a tiempo entre las ejecuciones completadas en el año por sistema',
    'alias'      => 'Ejecuciones completadas a tiempo entre las ejecuciones completadas',
    'code'       => 'count_of_undelayed_finished_execution_which_annual_finished',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las ejecuciones completadas a tiempo entre las ejecuciones completadas en el año por sistema son la cantidad de ejecuciones, de las cerradas en un año determinado, que se cerraron dentro del plazo previsto. Esta métrica sirve para medir la capacidad del equipo de cumplir a tiempo en ese año. Una cantidad alta de ejecuciones completadas a tiempo indica que el equipo puede entregar las ejecuciones a tiempo, lo que ayuda a mantener el curso normal de las ejecuciones y los proyectos.',
    'definition' => "所有的执行个数求和\n关闭时间为某年\n关闭日期<=执行开始时计划截止日期\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones completadas con retraso entre las ejecuciones completadas en el año por sistema',
    'alias'      => 'Ejecuciones completadas con retraso entre las ejecuciones completadas',
    'code'       => 'count_of_delayed_finished_execution_which_annual_finished',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las ejecuciones completadas con retraso entre las ejecuciones completadas en el año por sistema son la cantidad de ejecuciones, de las cerradas en un año determinado, que se cerraron después del plazo previsto. Esta métrica sirve para medir la capacidad del equipo de cumplir a tiempo en ese año e identificar las causas del retraso para tomar las medidas adecuadas. Una cantidad alta de ejecuciones cerradas con retraso puede requerir que el equipo preste atención a la planeación de las ejecuciones y a la asignación de recursos.',
    'definition' => "所有的关闭时间为某年的执行个数求和\n关闭日期>执行开始时计划截止日期\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de cierre a tiempo de ejecuciones entre las ejecuciones completadas en el año por sistema',
    'alias'      => 'Tasa de cierre a tiempo de ejecuciones entre las ejecuciones completadas',
    'code'       => 'rate_of_undelayed_closed_execution_which_annual_finished',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'percentage',
    'dateType'   => 'year',
    'desc'       => 'La tasa de cierre a tiempo de ejecuciones entre las ejecuciones completadas en el año por sistema es la razón entre la cantidad de ejecuciones cerradas dentro del plazo previsto en un año determinado y la cantidad de ejecuciones cerradas en ese año. Esta métrica ayuda al equipo a evaluar la capacidad y el efecto del cierre a tiempo de las ejecuciones en un año determinado, y es uno de los indicadores de desempeño de la gestión de ejecuciones. Una tasa alta de cierre a tiempo indica que el equipo puede completar las ejecuciones y los proyectos a tiempo.',
    'definition' => "复用：\n按系统统计的年度关闭执行数\n按系统统计的年度完成执行中按期完成执行数\n公式：\n按系统统计的年度完成执行中执行的按期关闭率=按系统统计的年度完成执行中按期完成执行数/按系统统计的年度关闭执行数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de cierre con retraso de ejecuciones entre las ejecuciones completadas en el año por sistema',
    'alias'      => 'Tasa de cierre con retraso de ejecuciones entre las ejecuciones completadas',
    'code'       => 'rate_of_delayed_closed_execution_which_annual_finished',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'execution',
    'unit'       => 'percentage',
    'dateType'   => 'year',
    'desc'       => 'La tasa de cierre con retraso de ejecuciones entre las ejecuciones completadas en el año por sistema es la razón entre la cantidad de ejecuciones cerradas después del plazo previsto en un año determinado y la cantidad de ejecuciones cerradas en ese año. Esta métrica ayuda al equipo a evaluar la capacidad y el efecto del cierre a tiempo de las ejecuciones en un año determinado, y es uno de los indicadores de desempeño de la gestión de ejecuciones. Una tasa alta de cierre con retraso puede requerir que el equipo preste atención a la planeación de las ejecuciones y a la asignación de recursos.',
    'definition' => "复用：\n按系统统计的年度关闭执行数\n按系统统计的年度完成执行中延期完成执行数\n公式：\n按系统统计的年度完成执行中执行的延期关闭率=按系统统计的年度完成执行中延期完成执行数/按系统统计的年度关闭执行数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de lanzamientos por sistema',
    'alias'      => 'Total de lanzamientos',
    'code'       => 'count_of_release',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'release',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de lanzamientos de producto por sistema refleja el número de versiones de producto que la organización lanzó en un período determinado. Sirve para evaluar la eficiencia del desarrollo de productos, la capacidad de adaptación al mercado y la optimización del portafolio de productos, y aporta evaluación del desempeño y oportunidades de aprendizaje.',
    'definition' => "所有的发布个数求和\n过滤已删除的发布"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de lanzamientos de hitos por sistema',
    'alias'      => 'Total de lanzamientos de hitos',
    'code'       => 'count_of_marker_release',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'release',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de lanzamientos de hitos de producto por sistema refleja el número de hitos de desarrollo de producto que la organización alcanzó en un período determinado. Sirve para evaluar el avance del desarrollo de productos y los puntos clave del producto.',
    'definition' => "所有的里程碑发布个数求和\n过滤已删除的发布"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Lanzamientos nuevos en el año por sistema',
    'alias'      => 'Lanzamientos nuevos',
    'code'       => 'count_of_annual_created_release',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'release',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'La cantidad de lanzamientos de producto nuevos en el año por sistema refleja el número de productos que la organización lanzó en un año determinado. Sirve para evaluar su capacidad de innovación de productos, su competitividad en el mercado, así como el crecimiento del negocio y el potencial de ingresos.',
    'definition' => "所有的发布个数求和\n发布时间为某年\n过滤已删除的发布"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Lanzamientos nuevos en el mes por sistema',
    'alias'      => 'Lanzamientos nuevos',
    'code'       => 'count_of_monthly_created_release',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'release',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'La cantidad de lanzamientos de producto nuevos en el mes por sistema refleja el número de productos que la organización lanzó en un mes determinado. Sirve para evaluar la eficiencia del desarrollo de productos, la capacidad de adaptación al mercado y la optimización del portafolio de productos.',
    'definition' => "所有的发布个数求和\n发布时间为某年某月\n过滤已删除的发布"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Lanzamientos nuevos por semana por sistema',
    'alias'      => 'Lanzamientos nuevos',
    'code'       => 'count_of_weekly_created_release',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'release',
    'unit'       => 'count',
    'dateType'   => 'week',
    'desc'       => 'Los lanzamientos nuevos por semana por sistema indican la cantidad de lanzamientos que se agregan cada semana. Reflejan la cantidad de lanzamientos que la organización suma semanalmente y sirven para evaluar la velocidad y el volumen de los lanzamientos de producto de la organización.',
    'definition' => "所有的发布个数求和\n发布时间为某周\n过滤已删除的发布\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de historias por sistema',
    'alias'      => 'Total de historias',
    'code'       => 'count_of_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de historias por sistema refleja el número de historias de desarrollo de la organización en un período determinado. Sirve para evaluar la inversión en desarrollo, la capacidad de innovación tecnológica y la competitividad en el mercado de la organización, y aporta evaluación del desempeño.',
    'definition' => "所有的研发需求个数求和\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias cerradas por sistema',
    'alias'      => 'Historias cerradas',
    'code'       => 'count_of_closed_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de historias de producto cerradas por sistema refleja el número de historias de desarrollo de producto que la organización ya cerró en un período determinado. Sirve para evaluar la eficacia de las decisiones de desarrollo, optimizar la gestión de recursos y aporta evaluación del desempeño y resultados.',
    'definition' => "所有的研发需求个数求和\n状态为已关闭\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias completadas por sistema',
    'alias'      => 'Historias completadas',
    'code'       => 'count_of_finished_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de historias completadas por sistema refleja el número de historias de desarrollo de producto que la organización ya completó en un período determinado. Sirve para evaluar los resultados de desarrollo, la innovación de productos y la competitividad de la organización, y aporta evaluación del desempeño.',
    'definition' => "所有的研发需求个数求和\n关闭原因为已完成\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias sin cerrar por sistema',
    'alias'      => 'Historias sin cerrar',
    'code'       => 'count_of_unclosed_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de historias de producto sin cerrar por sistema refleja el número de historias de desarrollo de producto que la organización aún no ha cerrado en un período determinado. Sirve para evaluar el avance del desarrollo, la gestión de requerimientos y la planeación de recursos, y aporta una evaluación de la viabilidad y el valor comercial de los requerimientos.',
    'definition' => "复用：\n按系统统计的研发需求总数\n按系统统计的已关闭研发需求数\n公式：按系统统计的未关闭研发需求数=按系统统计的研发需求总数-按系统统计的已关闭研发需求数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias inválidas por sistema',
    'alias'      => 'Historias inválidas',
    'code'       => 'count_of_invalid_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de historias de producto inválidas por sistema refleja el número de historias de desarrollo de producto inválidas o descartadas en la organización en un período determinado. Ayuda a evaluar la eficacia de la gestión de requerimientos, la eficiencia en el uso de recursos y la precisión de los requerimientos, y ofrece oportunidades de aprendizaje y mejora.',
    'definition' => "所有的研发需求个数求和\n关闭原因为重复、不做、设计如此和已取消\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias válidas por sistema',
    'alias'      => 'Historias válidas',
    'code'       => 'count_of_valid_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de historias de producto válidas por sistema refleja el número de historias de desarrollo de producto válidas en la organización en un período determinado. Sirve para evaluar la calidad de los requerimientos, la adaptabilidad al mercado, el retorno de la inversión en desarrollo y la competitividad.',
    'definition' => "复用：\n按系统统计的无效研发需求数\n按系统统计的研发需求总数\n公式：\n按系统统计的有效研发需求数=按系统统计的研发需求总数-按系统统计的无效研发需求数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias entregadas por sistema',
    'alias'      => 'Historias entregadas',
    'code'       => 'count_of_delivered_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La cantidad de historias de producto entregadas por sistema refleja el número de historias de desarrollo de producto que la organización entregó en un período determinado. Sirve para evaluar la capacidad de entrega, la eficiencia de ejecución de proyectos, la calidad del producto y la satisfacción del cliente.',
    'definition' => "所有的研发需求个数求和\n阶段为已发布或关闭原因为已完成\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias nuevas en el año por sistema',
    'alias'      => 'Historias nuevas',
    'code'       => 'count_of_annual_created_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'La cantidad de historias de producto nuevas en el año por sistema refleja el número de historias de desarrollo de producto que la organización agrega cada año. Sirve para evaluar la capacidad de innovación, el descubrimiento de requerimientos y la definición de prioridades, las decisiones de inversión, así como la evaluación del desempeño y la mejora continua.',
    'definition' => "所有的研发需求个数求和\n创建时间为某年\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias completadas en el año por sistema',
    'alias'      => 'Historias completadas',
    'code'       => 'count_of_annual_finished_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'La cantidad de historias completadas en el año por sistema refleja el número de historias de desarrollo que la organización completa cada año. Es importante para evaluar la producción de las actividades de desarrollo, la capacidad de gestión de proyectos, la calidad del producto y la competitividad en el mercado. Ayuda a optimizar la planeación de recursos, mejorar la eficiencia del desarrollo e impulsar la mejora continua y la innovación.',
    'definition' => "所有的研发需求个数求和\n关闭时间为某年\n关闭原因为已完成\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias nuevas en el mes por sistema',
    'alias'      => 'Historias nuevas',
    'code'       => 'count_of_monthly_created_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'La cantidad de historias nuevas en el mes por sistema refleja el número de historias de desarrollo que la organización agrega cada mes. Es importante para evaluar el monitoreo de las actividades de desarrollo, la gestión de requerimientos, la planeación de proyectos, la evaluación del desempeño y el apoyo a la toma de decisiones. Ofrece un indicador dinámico que brinda a la organización datos en tiempo real para gestionar y optimizar mejor las actividades de desarrollo.',
    'definition' => "所有的研发需求个数求和\n创建时间为某年某月\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias completadas en el mes por sistema',
    'alias'      => 'Historias completadas',
    'code'       => 'count_of_monthly_finished_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'La cantidad de historias completadas en el mes por sistema refleja el número de historias de desarrollo que la organización completa cada mes. Es importante para evaluar el desempeño, el seguimiento del avance, la planeación de recursos, la acumulación de experiencia y la mejora continua de la organización.',
    'definition' => "所有的研发需求个数求和\n关闭时间为某年某月\n关闭原因为已完成\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias entregadas en el año por sistema',
    'alias'      => 'Historias entregadas',
    'code'       => 'count_of_annual_delivered_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'La cantidad de historias entregadas en el año por sistema refleja el número de historias de desarrollo que la organización entrega en un año. Es importante para evaluar la capacidad de entrega, la gestión de proyectos, la satisfacción del cliente, la evaluación del desempeño y la mejora continua de la organización.',
    'definition' => "所有的研发需求个数求和\n阶段为已发布且发布时间为某年或关闭原因为已完成且关闭时间为某年的\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total del tamaño de historias por sistema',
    'alias'      => 'Total del tamaño de historias',
    'code'       => 'scale_of_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total del tamaño de historias por sistema refleja el tamaño total de todas las historias de desarrollo de la organización. Es importante para evaluar la planeación de recursos de desarrollo, la evaluación de la capacidad técnica, la gestión de requerimientos, la evaluación de riesgos y la evaluación del desempeño de la organización.',
    'definition' => "所有的研发需求规模数求和\n过滤父研发需求\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias completadas por sistema',
    'alias'      => 'Tamaño de historias completadas',
    'code'       => 'scale_of_finished_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El tamaño de historias completadas por sistema refleja el tamaño total de las historias de desarrollo ya completadas de la organización. Es importante para evaluar el avance del desarrollo, el control de calidad, la evaluación del desempeño y la mejora continua de la organización.',
    'definition' => "所有的研发需求规模数求和\n关闭原因为已完成\n过滤父研发需求\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias inválidas por sistema',
    'alias'      => 'Tamaño de historias inválidas',
    'code'       => 'scale_of_invalid_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El tamaño de historias inválidas por sistema refleja el tamaño total de las historias de desarrollo inválidas de la organización. Es importante para evaluar la gestión de recursos, la gestión de requerimientos, el control de calidad, la evaluación de riesgos y la mejora continua de la organización.',
    'definition' => "所有的研发需求规模数求和\n关闭原因为重复、不做、设计如此和已取消\n过滤父研发需求\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias válidas por sistema',
    'alias'      => 'Tamaño de historias válidas',
    'code'       => 'scale_of_valid_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El tamaño de historias válidas por sistema refleja el tamaño total de las historias de desarrollo válidas de la organización. Es importante para evaluar los resultados de los proyectos, la planeación de recursos, el grado de cumplimiento de objetivos, la evaluación del desempeño y la mejora continua de la organización.',
    'definition' => "复用：\n按系统统计的无效研发需求规模数\n按系统统计的研发需求规模数\n公式：\n按系统统计的有效研发需求数=按系统统计的研发需求规模数-按系统统计的无效研发需求规模数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias completadas en el año por sistema',
    'alias'      => 'Tamaño de historias completadas',
    'code'       => 'scale_of_annual_finished_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'El tamaño de historias completadas en el año por sistema refleja el tamaño total de las historias de desarrollo completadas por la organización durante el año. Es importante para evaluar el desempeño, la planeación y la gestión de recursos, la evaluación de riesgos, el aprendizaje y la mejora continua, así como la transparencia y la comunicación de la organización.',
    'definition' => "所有的研发需求规模数求和\n关闭时间为某年\n关闭原因为已完成\n过滤父研发需求\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias entregadas en el año por sistema',
    'alias'      => 'Tamaño de historias entregadas',
    'code'       => 'scale_of_annual_delivered_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'El tamaño de historias entregadas en el año por sistema refleja el tamaño total de las historias de desarrollo entregadas por la organización durante el año. Es importante para evaluar la entrega de proyectos, el desempeño, la planeación de recursos, la evaluación de riesgos, el aprendizaje y la mejora continua de la organización.',
    'definition' => "所有研发需求规模数求和\n阶段为已发布且发布时间为某年或关闭原因为已完成且关闭时间为某年\n过滤父研发需求\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias cerradas en el año por sistema',
    'alias'      => 'Tamaño de historias cerradas',
    'code'       => 'scale_of_annual_closed_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'El tamaño de historias cerradas en el año por sistema refleja el tamaño total de las historias de desarrollo cerradas por la organización durante el año. Es importante para evaluar la gestión y el control de proyectos, el desempeño, la planeación de recursos, la evaluación de riesgos, el aprendizaje y la mejora continua de la organización.',
    'definition' => "所有的研发需求规模数求和\n关闭时间为某年\n过滤父研发需求\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias completadas en el mes por sistema',
    'alias'      => 'Tamaño de historias completadas',
    'code'       => 'scale_of_monthly_finished_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'El tamaño de historias completadas en el mes por sistema refleja el tamaño total de las historias de desarrollo completadas por la organización cada mes. Es importante para evaluar el monitoreo del avance, el desempeño, la planeación de recursos, la evaluación de riesgos, la mejora continua y la agilidad de la organización.',
    'definition' => "所有的研发需求规模数求和\n关闭时间为某年某月\n关闭原因为已完成\n过滤父研发需求\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias entregadas en el mes por sistema',
    'alias'      => 'Tamaño de historias entregadas',
    'code'       => 'scale_of_monthly_delivered_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'El tamaño de historias entregadas en el mes por sistema refleja el tamaño total de las historias de desarrollo entregadas por la organización cada mes. Es importante para evaluar la capacidad de entrega, el desempeño, la gestión y el control de proyectos, la satisfacción del cliente y la construcción de confianza, la mejora continua y el aumento de la eficiencia de la organización.',
    'definition' => "所有的研发需求规模数求和\n阶段为已发布且发布时间为某年某月或关闭原因为已完成且关闭时间为某年某月\n过滤父研发需求\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias cerradas en el mes por sistema',
    'alias'      => 'Tamaño de historias cerradas',
    'code'       => 'scale_of_monthly_closed_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'El tamaño de historias cerradas en el mes por sistema refleja el tamaño total de las historias de desarrollo cerradas por la organización cada mes. Es importante para evaluar la gestión y el control de proyectos, el desempeño, la planeación y el aprovechamiento de recursos, la evaluación de riesgos, la mejora continua y el aumento de la eficiencia de la organización.',
    'definition' => "所有的研发需求规模数求和\n关闭时间为某年某月\n过滤父研发需求\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias completadas por semana por sistema',
    'alias'      => 'Tamaño de historias completadas',
    'code'       => 'scale_of_weekly_finished_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'measure',
    'dateType'   => 'week',
    'desc'       => 'El tamaño de historias completadas por semana por sistema indica la cantidad de historias de desarrollo completadas cada semana. Refleja la cantidad de historias de desarrollo que la organización completa semanalmente y es información útil para evaluar el avance de proyectos, la planeación de recursos, la gestión de requerimientos, el desempeño del equipo y el control de calidad. Es importante para la gestión de proyectos y la colaboración del equipo, y ayuda al equipo a monitorear el avance, optimizar el uso de recursos y mejorar la eficiencia de desarrollo.',
    'definition' => "所有的研发需求个数求和\n关闭时间为某周\n关闭原因为已完成\n过滤父需求\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias completadas por semana por sistema',
    'alias'      => 'Historias completadas',
    'code'       => 'count_of_weekly_finished_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'week',
    'desc'       => 'Las historias completadas por semana por sistema son la cantidad de historias de desarrollo cerradas cada semana cuyo motivo de cierre es Completada. Refleja la eficiencia de desarrollo y los resultados del equipo en cada semana y es información útil para evaluar la gestión de requerimientos, el avance de proyectos, la planeación de recursos, la evaluación del desempeño y el control de calidad. Es importante para la gestión de proyectos y la colaboración del equipo, y ayuda al equipo a monitorear el avance, optimizar el uso de recursos y mejorar la eficiencia de trabajo.',
    'definition' => "所有研发需求的个数求和。\n关闭时间在某周。\n关闭原因为已完成。\n过滤已删除的研发需求。\n过滤已删除的产品。"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias nuevas por día por sistema',
    'alias'      => 'Historias nuevas',
    'code'       => 'count_of_daily_created_story',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Las historias nuevas por día por sistema indican la cantidad de historias de desarrollo que se agregan cada día y pueden usarse para evaluar el crecimiento de los requerimientos de desarrollo y la expansión de su escala en la organización.',
    'definition' => "所有的研发需求个数求和\n创建时间为某日\n过滤已删除的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de finalización de historias por sistema',
    'alias'      => 'Tasa de finalización de historias',
    'code'       => 'rate_of_finished_story',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de finalización de historias por sistema refleja la razón entre las historias completadas por sistema y las historias válidas por sistema de la organización. Es importante para evaluar el control del avance, el desempeño, la evaluación de riesgos, la planeación y el aprovechamiento de recursos, así como la mejora continua y el aumento de la eficiencia de la organización.',
    'definition' => "复用：\n按系统统计的完成研发需求数\n按系统统计的有效研发需求数\n公式：\n按系统统计的研发需求完成率=按系统统计的已完成研发需求数/按系统统计的有效研发需求数*100%"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de entrega de historias por sistema',
    'alias'      => 'Tasa de entrega de historias',
    'code'       => 'rate_of_delivered_story',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de entrega de historias por sistema refleja la capacidad y el desempeño de la organización para entregar requerimientos a tiempo durante el desarrollo. Es importante para evaluar la capacidad de entrega, la satisfacción del cliente y la construcción de confianza, la gestión de proyectos y la optimización de recursos, la competitividad y el desempeño en el mercado, así como la mejora continua y el aumento de la eficiencia.',
    'definition' => "复用：\n按系统统计的已交付研发需求数\n按系统统计的有效研发需求数\n公式：\n按系统统计的研发需求完成率=按系统统计的已交付研发需求数/按系统统计的有效研发需求数*100%"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de finalización de historias en el año por sistema',
    'alias'      => 'Tasa de finalización de historias',
    'code'       => 'rate_of_annual_finished_story',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'percentage',
    'dateType'   => 'year',
    'desc'       => 'La tasa de finalización de historias en el año por sistema refleja la capacidad y el desempeño de la organización para completar requerimientos durante el desarrollo del año. Es importante para evaluar el cumplimiento de objetivos de proyectos, la planeación y optimización de recursos, las decisiones de negocio y la ejecución de la estrategia, la evaluación del desempeño y los mecanismos de incentivos, así como la mejora continua y el aumento de la eficiencia.',
    'definition' => "复用：\n按系统统计的年度完成研发需求数\n按系统统计的年度有效研发需求数\n公式：\n按系统统计的年度研发需求完成率=按系统统计的年度完成研发需求数/按系统统计的年度有效研发需求数*100%"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de entrega de historias en el año por sistema',
    'alias'      => 'Tasa de entrega de historias',
    'code'       => 'rate_of_annual_delivered_story',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'percentage',
    'dateType'   => 'year',
    'desc'       => 'La tasa de entrega de historias en el año por sistema refleja la capacidad y el desempeño de la organización para entregar requerimientos a tiempo durante el desarrollo del año. Sirve para evaluar la capacidad de entrega de proyectos, la satisfacción del cliente y la construcción de confianza, la gestión del avance y el control de riesgos de proyectos, la evaluación del desempeño y los mecanismos de incentivos, así como la mejora continua y el aumento de la eficiencia.',
    'definition' => "复用：\n按系统统计的年度交付研发需求数\n按系统统计的年度有效研发需求数\n公式：\n按系统统计的年度研发需求完成率=按系统统计的年度交付研发需求数/按系统统计的年度有效研发需求数*100%"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de tareas por sistema',
    'alias'      => 'Total de tareas',
    'code'       => 'count_of_task',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de tareas por sistema es la cantidad total de tareas que existen actualmente en todo el equipo o la organización. Esta métrica sirve para dar seguimiento al tamaño y la complejidad de las tareas y es la base para la asignación de recursos y la planeación del trabajo. Un total de tareas grande puede requerir más recursos y tiempo para completarse, mientras que un total pequeño puede significar que el equipo tiene una carga ligera o que los proyectos avanzan bien.',
    'definition' => "所有的任务个数求和\n过滤已删除的任务\n过滤已删除项目的任务\n过滤已删除执行的任务"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas completadas por sistema',
    'alias'      => 'Tareas completadas',
    'code'       => 'count_of_finished_task',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas completadas por sistema son la cantidad total de tareas que el equipo o la organización ya completó. Esta métrica permite medir el avance y la eficiencia en la finalización de tareas, así como la calidad del trabajo y la producción de los miembros del equipo o de la organización. Un total alto de tareas completadas puede indicar que el equipo tiene buena capacidad para entregar el trabajo.',
    'definition' => "所有的任务个数求和\n状态为已完成或者状态为已关闭且关闭原因为已完成\n过滤已删除的任务\n过滤已删除项目的任务\n过滤已删除执行的任务"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas sin completar por sistema',
    'alias'      => 'Tareas sin completar',
    'code'       => 'count_of_unfinished_task',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas sin completar por sistema son la cantidad total de tareas que el equipo o la organización aún no ha completado. Esta métrica sirve para evaluar el avance de los proyectos y la carga de trabajo futura, y también ayuda a asignar recursos y definir prioridades. Un total grande de tareas sin completar puede requerir más esfuerzo y ajustes para asegurar que las tareas se completen a tiempo.',
    'definition' => "复用：\n按系统统计的任务总数\n按系统统计的已完成任务数\n公式：\n按系统统计的未完成任务数=按系统统计的任务总数-按系统统计的已完成任务数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas cerradas por sistema',
    'alias'      => 'Tareas cerradas',
    'code'       => 'count_of_closed_task',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas cerradas por sistema son la cantidad total de tareas que el equipo o la organización ya cerró. Esta métrica sirve para evaluar la situación operativa de los proyectos o del equipo y la eficacia de la gestión de tareas. Un total alto de tareas cerradas puede indicar que el equipo tiene buena capacidad de gestión de tareas, y también permite liberar recursos y atender otras tareas con prioridad.',
    'definition' => "所有的任务个数求和\n状态为已关闭\n过滤已删除的任务\n过滤已删除项目的任务\n过滤已删除执行的任务"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas nuevas en el año por sistema',
    'alias'      => 'Tareas nuevas',
    'code'       => 'count_of_annual_created_task',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las tareas nuevas en el año por sistema son la cantidad total de tareas agregadas en un año. Esta métrica sirve para medir la nueva carga de trabajo que asume el equipo o la organización en un año determinado. Una cantidad alta de tareas nuevas en el año puede requerir recursos adicionales y ajustes de planeación para satisfacer la demanda.',
    'definition' => "所有的任务个数求和\n创建时间为某年\n过滤已删除的任务\n过滤已删除项目的任务\n过滤已删除执行的任务"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas completadas en el año por sistema',
    'alias'      => 'Tareas completadas',
    'code'       => 'count_of_annual_finished_task',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las tareas completadas en el año por sistema son la cantidad total de tareas ya completadas en un año determinado. Esta métrica sirve para evaluar la eficiencia de trabajo y la capacidad de finalización del equipo o la organización en ese año. Una cantidad alta de tareas completadas en el año indica que el equipo o la organización muestra una buena eficiencia en la ejecución de proyectos.',
    'definition' => "所有的任务个数求和\n完成时间为某年\n过滤已删除的任务\n过滤已删除项目的任务\n过滤已删除执行的任务"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas nuevas en el mes por sistema',
    'alias'      => 'Tareas nuevas',
    'code'       => 'count_of_monthly_created_task',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Las tareas nuevas en el mes por sistema son la cantidad total de tareas agregadas en un mes determinado. Esta métrica sirve para medir la nueva carga de trabajo que asume el equipo o la organización en ese mes y su efecto en la planeación de proyectos y la asignación de recursos. Una cantidad alta de tareas nuevas en el mes puede requerir recursos adicionales y ajustes de planeación para satisfacer la demanda.',
    'definition' => "所有的任务个数求和\n创建时间为某年某月\n过滤已删除的任务\n过滤已删除项目的任务\n过滤已删除执行的任务"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas completadas en el mes por sistema',
    'alias'      => 'Tareas completadas',
    'code'       => 'count_of_monthly_finished_task',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Las tareas completadas en el mes por sistema son la cantidad total de tareas ya completadas en un mes determinado. Esta métrica sirve para evaluar la eficiencia de trabajo y la capacidad de finalización del equipo o la organización en ese mes. Una cantidad alta de tareas completadas en el mes indica que el equipo o la organización muestra una buena eficiencia en la ejecución de proyectos.',
    'definition' => "所有的任务个数求和\n完成时间为某年某月\n过滤已删除的任务\n过滤已删除项目的任务\n过滤已删除执行的任务"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas estimadas de tareas por sistema',
    'alias'      => 'Horas estimadas de tareas',
    'code'       => 'estimate_of_task',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas estimadas de tareas por sistema son la suma de las horas de trabajo que se estima necesarias para completar todas las tareas. Esta métrica sirve para planear recursos y estimar la duración, y es una referencia para la gestión de proyectos y la colaboración del equipo. Unas horas estimadas más precisas ayudan al equipo a organizar mejor el tiempo y los recursos y a mejorar la eficiencia de finalización de tareas.',
    'definition' => "所有的任务的预计工时数求和\n过滤父任务\n过滤已删除的任务\n过滤已删除项目的任务\n过滤已删除执行的任务"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas consumidas de tareas por sistema',
    'alias'      => 'Horas consumidas de tareas',
    'code'       => 'consume_of_task',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas consumidas de tareas por sistema son la suma de las horas de trabajo ya invertidas para completar todas las tareas. Esta métrica sirve para evaluar la inversión de horas del equipo o la organización durante la ejecución de tareas, así como su eficiencia y el aprovechamiento de recursos al completarlas. Un total alto de horas consumidas puede indicar que se requiere revisar el flujo de trabajo y la asignación de recursos para mejorar la eficiencia.',
    'definition' => "所有的任务的消耗工时数求和\n过滤父任务\n过滤已删除的任务\n过滤已删除项目的任务\n过滤已删除执行的任务"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas restantes de tareas por sistema',
    'alias'      => 'Horas restantes de tareas',
    'code'       => 'left_of_task',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas restantes de tareas por sistema son la suma de las horas de trabajo que actualmente restan para completar todas las tareas. Esta métrica sirve para evaluar el trabajo y el tiempo que le quedan al equipo o la organización durante la ejecución de tareas, así como los recursos y la planeación necesarios para completarlas. Un total pequeño de horas restantes puede indicar que el equipo está por terminar las tareas.',
    'definition' => "所有的任务的剩余工时数求和\n过滤父任务\n过滤已删除的任务\n过滤已删除项目的任务\n过滤已删除执行的任务"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas completadas por día por sistema',
    'alias'      => 'Tareas completadas',
    'code'       => 'count_of_daily_finished_task',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Las tareas completadas por día por sistema son la cantidad total de tareas completadas cada día. Esta métrica sirve para evaluar la eficiencia de trabajo diaria y la capacidad de finalización de tareas del equipo o la organización.',
    'definition' => "所有的任务个数求和\n完成时间为某日\n过滤已删除的任务\n过滤已删除项目的任务\n过滤已删除执行的任务"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de Bugs por sistema',
    'alias'      => 'Total de Bugs',
    'code'       => 'count_of_bug',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de Bugs por sistema es la cantidad de todos los Bugs encontrados en todo el sistema. Esta métrica refleja la calidad general del sistema o proyecto en cuanto a Bugs. Un total alto de Bugs puede indicar problemas de calidad en el código del sistema o proyecto, que requieren mayor resolución y mejora.',
    'definition' => "所有Bug个数求和\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs activos por sistema',
    'alias'      => 'Bugs activos',
    'code'       => 'count_of_activated_bug',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs activos por sistema son la cantidad de Bugs que actualmente no se han resuelto. Esta métrica refleja la cantidad de problemas pendientes de resolver que existen actualmente en el sistema o proyecto. Un total alto de Bugs activos puede indicar que el sistema o proyecto tiene baja estabilidad y que es necesario mejorar la velocidad y la calidad de la resolución de Bugs.',
    'definition' => "所有Bug个数求和\n状态为激活\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs resueltos por sistema',
    'alias'      => 'Bugs resueltos',
    'code'       => 'count_of_resolved_bug',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs resueltos por sistema son la cantidad de Bugs que ya fueron resueltos por el equipo de desarrollo. Reflejan la cantidad de Bugs resueltos por la organización en un período determinado y sirven para evaluar la calidad del sistema, la satisfacción de los usuarios, la gestión de recursos, la mejora de procesos y el desempeño. Al dar seguimiento y analizar los Bugs resueltos, se pueden detectar problemas a tiempo, mejorar el proceso de desarrollo, aumentar la satisfacción de los usuarios y obtener una base para evaluar y optimizar el desempeño del equipo.',
    'definition' => "所有Bug个数求和\n状态为已解决\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de Bugs cerrados por sistema',
    'alias'      => 'Bugs cerrados',
    'code'       => 'count_of_closed_bug',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de Bugs cerrados por sistema es la cantidad de Bugs que ya fueron cerrados. Refleja la cantidad de Bugs cerrados por la organización en un período determinado y sirve para evaluar la calidad del sistema, la gestión del avance, la gestión de recursos, la mejora de procesos y el desempeño. Al dar seguimiento y analizar el total de Bugs cerrados, se pueden detectar problemas a tiempo, mejorar el proceso de desarrollo, acelerar el avance del proyecto y obtener una base para evaluar y optimizar el desempeño del equipo.',
    'definition' => "所有Bug个数求和\n状态为已关闭\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs sin cerrar por sistema',
    'alias'      => 'Bugs sin cerrar',
    'code'       => 'count_of_unclosed_bug',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs sin cerrar por sistema son la cantidad de Bugs que actualmente siguen existiendo sin haberse cerrado. Reflejan la cantidad de Bugs que la organización aún no ha resuelto en un período determinado y sirven para evaluar la calidad del sistema, la gestión de problemas, las prioridades y los ajustes de planeación, la gestión de recursos y la mejora de procesos. Al dar seguimiento y analizar los Bugs sin cerrar, se pueden detectar problemas a tiempo, optimizar el proceso de manejo de problemas, organizar los recursos de forma razonable y obtener una base para la gestión de calidad y la mejora continua del equipo.',
    'definition' => "复用：\n按系统统计的Bug总数\n按系统统计的已关闭Bug数\n公式：\n按系统统计的未关闭Bug数=按系统统计的Bug总数-按系统统计的已关闭Bug数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs corregidos por sistema',
    'alias'      => 'Bugs corregidos',
    'code'       => 'count_of_fixed_bug',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs corregidos por sistema son la cantidad de Bugs resueltos y cerrados. Reflejan la cantidad de Bugs que la organización ya corrigió en un período determinado y sirven para evaluar la calidad del sistema, la gestión de problemas, la gestión del avance, la gestión de recursos y la mejora de procesos. Al dar seguimiento y analizar los Bugs corregidos, se pueden detectar problemas a tiempo, optimizar el proceso de manejo de problemas, acelerar el avance del proyecto y obtener una base para la gestión de calidad y la mejora continua del equipo.',
    'definition' => "所有Bug个数求和\n状态为已关闭\n解决方案为已解决\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs válidos por sistema',
    'alias'      => 'Bugs válidos',
    'code'       => 'count_of_valid_bug',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs válidos por sistema son la cantidad de Bugs que realmente tienen impacto y valor en el sistema o proyecto. Reflejan la cantidad de Bugs válidos en un sistema o software. Un Bug válido es un problema real, verificado y confirmado, que debe corregirse y resolverse. Sirven para evaluar la calidad del sistema, la gestión de problemas, la gestión de recursos, la mejora de procesos y la satisfacción de los usuarios. Al dar seguimiento y analizar los Bugs válidos, se pueden detectar problemas a tiempo, optimizar el proceso de manejo de problemas, organizar los recursos de forma razonable y obtener una base para la gestión de calidad y la mejora continua del equipo, además de aumentar la satisfacción de los usuarios y la calidad del sistema.',
    'definition' => "所有Bug个数求和\n解决方案为已解决和延期处理\n或状态为激活的Bug数\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs nuevos en el año por sistema',
    'alias'      => 'Bugs nuevos',
    'code'       => 'count_of_annual_created_bug',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los Bugs nuevos en el año por sistema son la cantidad de Bugs descubiertos por primera vez en un año. Reflejan la cantidad de Bugs nuevos que un sistema o software acumula cada año y sirven para evaluar la calidad del sistema, la gestión de cambios, la planeación de recursos, la mejora de procesos y el análisis de tendencias.',
    'definition' => "所有Bug个数求和\n创建时间为某年\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs corregidos en el año por sistema',
    'alias'      => 'Bugs corregidos',
    'code'       => 'count_of_annual_fixed_bug',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los Bugs corregidos en el año por sistema son la cantidad de Bugs resueltos y cerrados en un año. Reflejan la cantidad de Bugs que un sistema o software corrigió en un año y sirven para evaluar la mejora de la calidad del sistema, la satisfacción de los usuarios, la gestión de fallas, la gestión de cambios y la planeación de recursos. Al dar seguimiento y analizar los Bugs corregidos en el año, se pueden detectar y resolver problemas a tiempo y mejorar la calidad y la confiabilidad del sistema. Además, con la evaluación de los Bugs corregidos se puede aumentar la satisfacción de los usuarios, optimizar el proceso de gestión de fallas, controlar la calidad de los cambios y organizar los recursos de forma razonable, mejorando así el resultado general del desarrollo y la calidad de la entrega del proyecto.',
    'definition' => "所有Bug个数求和\n状态为已关闭\n解决方案为已解决\n关闭时间为某年\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs nuevos en el mes por sistema',
    'alias'      => 'Bugs nuevos',
    'code'       => 'count_of_monthly_created_bug',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Los Bugs nuevos en el mes por sistema son la cantidad de Bugs descubiertos por primera vez en un mes. Reflejan la cantidad de Bugs nuevos que un sistema o software acumula cada mes y sirven para evaluar la detección oportuna de problemas, la gestión de cambios y la evaluación de impacto, el análisis de tendencias y la predicción de problemas, y la planeación y optimización de recursos. Al dar seguimiento y analizar los Bugs nuevos en el mes, se pueden detectar problemas de calidad a tiempo, optimizar la gestión de cambios, predecir la tendencia de calidad del sistema y organizar los recursos de forma razonable, mejorando así la calidad y la confiabilidad del sistema.',
    'definition' => "所有Bug个数求和\n创建时间为某年某月\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs corregidos en el mes por sistema',
    'alias'      => 'Bugs corregidos',
    'code'       => 'count_of_monthly_fixed_bug',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Los Bugs corregidos en el mes por sistema son la cantidad de Bugs resueltos y cerrados en un mes. Reflejan la cantidad de Bugs que un sistema o software corrigió cada mes y sirven para evaluar la mejora de la calidad, la gestión de fallas, la gestión de cambios, la planeación de recursos, y el análisis de tendencias y la predicción de problemas. Al dar seguimiento y analizar los Bugs corregidos en el mes, se pueden detectar y resolver problemas a tiempo y mejorar la calidad y la confiabilidad del sistema.',
    'definition' => "所有Bug个数求和\n状态为已关闭\n解决方案为已解决\n关闭时间为某年某月\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs cerrados por día por sistema',
    'alias'      => 'Bugs cerrados',
    'code'       => 'count_of_daily_closed_bug',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Los Bugs cerrados por día por sistema son la cantidad de Bugs que la organización confirma y cierra cada día. Esta métrica ayuda a conocer la velocidad y la eficiencia con que la organización confirma y cierra los Bugs ya resueltos.',
    'definition' => "所有每日关闭的Bug数求和\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de corrección de Bugs por sistema',
    'alias'      => 'Tasa de corrección de Bugs',
    'code'       => 'rate_of_fixed_bug',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'bug',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de corrección de Bugs por sistema es la proporción de Bugs corregidos respecto a la cantidad de Bugs válidos. Refleja la eficiencia y la velocidad de corrección de Bugs de un sistema o software y sirve para evaluar la mejora de la calidad, la gestión de fallas, la satisfacción de los usuarios, la gestión de cambios y la evaluación y mejora del desempeño del equipo. Al dar seguimiento y analizar la tasa de corrección de Bugs, se puede evaluar la eficiencia y la capacidad del equipo para corregir Bugs, detectar y resolver problemas a tiempo y mejorar la calidad y la confiabilidad del sistema.',
    'definition' => "复用：\n按系统统计的已修复Bug数\n按系统统计的有效Bug数\n公式：\n按系统统计的Bug修复率=按系统统计的已修复Bug数/按系统统计的有效Bug数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de casos de prueba por sistema',
    'alias'      => 'Total de casos de prueba',
    'code'       => 'count_of_case',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'case',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de casos de prueba por sistema es la cantidad total de casos de prueba del sistema o proyecto. Refleja la amplitud funcional y la complejidad de un sistema o software y sirve para evaluar la completitud funcional, la gestión de requerimientos, la evaluación del tamaño del proyecto, la evaluación de la cobertura de pruebas y la gestión de cambios. Al contabilizar y dar seguimiento al total de casos de prueba, se puede evaluar la amplitud funcional y la complejidad del sistema y ayudar al equipo con la gestión de requerimientos, la evaluación del tamaño del proyecto, la cobertura de pruebas y la gestión de cambios, mejorando así la eficiencia de desarrollo y la calidad del sistema.',
    'definition' => "所有用例个数求和\n过滤已删除的用例\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Casos de prueba nuevos en el año por sistema',
    'alias'      => 'Casos de prueba nuevos',
    'code'       => 'count_of_annual_created_case',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'case',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los casos de prueba nuevos en el año por sistema son la cantidad de casos de prueba agregados en un año. Contabilizar los casos de prueba nuevos en el año ayuda a evaluar la cobertura y la profundidad de las pruebas del sistema o proyecto en distintas etapas. Un aumento de los casos de prueba nuevos en el año puede significar que las nuevas funcionalidades y requerimientos se probaron más a fondo.',
    'definition' => "所有用例个数求和\n创建时间在某年\n过滤已删除的用例\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones de casos de prueba por día por sistema',
    'alias'      => 'Ejecuciones de casos de prueba',
    'code'       => 'count_of_daily_run_case',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'case',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Las ejecuciones de casos de prueba por día por sistema indican la cantidad de veces que la organización ejecuta casos de prueba cada día. Esta métrica puede reflejar la eficiencia de trabajo y el avance diarios del equipo de pruebas.',
    'definition' => "所有用例的执行次数求和\n过滤已删除的用例\n过滤已删除的产品\n执行时间为某日"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de usuarios por sistema',
    'alias'      => 'Total de usuarios',
    'code'       => 'count_of_user',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'user',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de personas por sistema es la cantidad total de personas que participan en el desarrollo y la gestión del proyecto o sistema. Refleja la base de usuarios y la escala de usuarios del sistema, y es información útil para evaluar los recursos internos de la organización, las tendencias de crecimiento y otros aspectos. Es importante para el desarrollo de la organización, la gestión interna y las decisiones estratégicas.',
    'definition' => "系统所有用户个数求和\n过滤已删除的用户"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Usuarios agregados en el año por sistema',
    'alias'      => 'Usuarios agregados',
    'code'       => 'count_of_annual_created_user',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'user',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las personas nuevas en el año por sistema son la cantidad de personas agregadas al proyecto o sistema durante un año. Es un indicador de la cantidad de usuarios nuevos que el sistema o la plataforma suma en un año y sirve para evaluar la ampliación del equipo y la rotación de personal. Un aumento de las personas nuevas en el año puede significar un crecimiento del equipo o una ampliación del proyecto.',
    'definition' => "系统所有用户个数求和\n添加时间为某年"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de horas de trabajo registradas por año por sistema',
    'alias'      => 'Total de horas de trabajo registradas',
    'code'       => 'hour_of_annual_effort',
    'purpose'    => 'hour',
    'scope'      => 'system',
    'object'     => 'effort',
    'unit'       => 'hour',
    'dateType'   => 'year',
    'desc'       => 'El total de horas de trabajo registradas por año por sistema es el número total de horas que la organización dedicó realmente en un año. Esta métrica sirve para evaluar la inversión de horas y la eficiencia en el uso de recursos. Un número alto de horas consumidas puede requerir revisar los flujos de trabajo y la asignación de recursos para mejorar la eficiencia y el control del avance.',
    'definition' => "所有日志记录的工时之和\n记录时间在某年"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de días-persona invertidos por año por sistema',
    'alias'      => 'Total de días-persona invertidos',
    'code'       => 'day_of_annual_effort',
    'purpose'    => 'hour',
    'scope'      => 'system',
    'object'     => 'effort',
    'unit'       => 'manday',
    'dateType'   => 'year',
    'desc'       => 'El total de días-persona invertidos por año por sistema es el total de días de trabajo que el equipo ha invertido. Esta métrica sirve para evaluar la inversión de recursos humanos. Un aumento en el total de días-persona puede indicar un incremento en el tiempo de trabajo y los recursos invertidos en los proyectos.',
    'definition' => "复用：\n按系统统计的年度日志记录的工时总数\n公式：\n按系统统计的年度投入总人天=按系统统计的年度日志记录的工时总数/后台配置的每日可用工时"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de días-persona invertidos por día por sistema',
    'alias'      => 'Total de días-persona invertidos',
    'code'       => 'day_of_daily_effort',
    'purpose'    => 'hour',
    'scope'      => 'system',
    'object'     => 'effort',
    'unit'       => 'manday',
    'dateType'   => 'day',
    'desc'       => 'El total de días-persona invertidos por día por sistema es la carga de trabajo que el equipo invierte cada día. Esta métrica sirve para evaluar la inversión diaria de recursos humanos.',
    'definition' => "复用：\n按系统统计的每日日志记录的工时总数\n公式：\n按系统统计的每日投入总人天=按系统统计的每日日志记录的工时总数/后台配置的每日可用工时"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de horas de trabajo registradas por día por sistema',
    'alias'      => 'Total de horas de trabajo registradas',
    'code'       => 'hour_of_daily_effort',
    'purpose'    => 'hour',
    'scope'      => 'system',
    'object'     => 'effort',
    'unit'       => 'hour',
    'dateType'   => 'day',
    'desc'       => 'El total de horas de trabajo registradas por día por sistema es el número total de horas que la organización dedica realmente cada día. Esta métrica sirve para evaluar la inversión de horas y la eficiencia en el uso de recursos. Un número alto de horas consumidas puede requerir revisar los flujos de trabajo y la asignación de recursos para mejorar la eficiencia y el control del avance.',
    'definition' => "所有日志记录的工时之和\n记录时间在某日"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de documentos por sistema',
    'alias'      => 'Total de documentos',
    'code'       => 'count_of_doc',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'doc',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de documentos por sistema es el valor estadístico de la cantidad de todos los documentos que existen en el sistema o la organización. Refleja la escala y la complejidad de la gestión documental. Cuanto mayor es el total de documentos, más rica es la información de la organización, y también puede implicar que se necesitan más recursos para mantener y gestionar estos documentos.',
    'definition' => "所有文档个数求和\n过滤已删除的文档"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Documentos nuevos por año por sistema',
    'alias'      => 'Documentos nuevos',
    'code'       => 'count_of_annual_created_doc',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'doc',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los documentos nuevos por año por sistema son la cantidad de documentos creados en el sistema o la organización durante un año. Refleja la velocidad de generación de información y la tendencia de crecimiento de la organización. Cuanto mayor es el número de documentos nuevos al año, más fuertes son la necesidad de información y la creatividad de la organización, y también puede ser necesario invertir más recursos para gestionar y mantener estos documentos. Esta métrica también puede usarse para evaluar la capacidad de innovación y el nivel de gestión del conocimiento de la organización.',
    'definition' => "所有文档个数求和\n创建时间为某年\n过滤已删除的文档"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de retroalimentaciones por sistema',
    'alias'      => 'Total de retroalimentaciones',
    'code'       => 'count_of_feedback',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de retroalimentaciones por sistema es la cantidad de toda la retroalimentación de usuarios recopilada. Esta métrica ayuda al equipo a conocer las preocupaciones y problemas de los usuarios con el producto, y sirve de base para mejorar la calidad del producto y la satisfacción de los usuarios. Un total alto de retroalimentaciones puede indicar una mayor actividad e interés de los usuarios, que requiere respuesta y atención oportunas del equipo, y también puede sugerir que el producto tiene muchos problemas.',
    'definition' => "所有的反馈个数求和\n过滤已删除的反馈\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones cerradas por sistema',
    'alias'      => 'Retroalimentaciones cerradas',
    'code'       => 'count_of_closed_feedback',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las retroalimentaciones cerradas por sistema son la cantidad de retroalimentaciones de usuarios que ya se atendieron y se cerraron. Esta métrica refleja la atención del equipo a la retroalimentación de los usuarios y su eficiencia de atención. Un total alto de retroalimentaciones cerradas puede indicar que el equipo responde oportunamente a la retroalimentación y mejora continuamente el producto para resolver los problemas de los usuarios.',
    'definition' => "所有的反馈个数求和\n状态为已关闭\n过滤已删除的反馈"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones nuevas por año por sistema',
    'alias'      => 'Retroalimentaciones nuevas',
    'code'       => 'count_of_annual_created_feedback',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las retroalimentaciones nuevas por año por sistema son la cantidad de retroalimentaciones de usuarios recopiladas durante un año. Esta métrica ayuda al equipo a conocer la tendencia de desarrollo del producto y los cambios en las necesidades de los usuarios, y a ajustar y optimizar la estrategia del producto. Un número alto de retroalimentaciones nuevas al año puede indicar que la base de usuarios del producto creció o que las iteraciones de funcionalidades atrajeron más participación de usuarios.',
    'definition' => "所有的反馈个数求和\n创建时间为某年\n过滤已删除的反馈"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones cerradas por año por sistema',
    'alias'      => 'Retroalimentaciones cerradas',
    'code'       => 'count_of_annual_closed_feedback',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las retroalimentaciones cerradas por año por sistema son la cantidad de retroalimentaciones de usuarios atendidas y cerradas durante un año. Esta métrica ayuda al equipo a evaluar su capacidad de respuesta y de resolución de problemas ante la retroalimentación de los usuarios en un año. Un número alto de retroalimentaciones cerradas al año puede indicar que el equipo resuelve la retroalimentación de manera eficiente y mejora continuamente el producto, elevando la satisfacción de los usuarios y la calidad del producto.',
    'definition' => "所有的反馈个数求和\n关闭时间为某年\n过滤已删除的反馈"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de repositorios por sistema',
    'alias'      => 'Total de repositorios',
    'code'       => 'count_of_codebase',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'code',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de repositorios por sistema es la cantidad total de repositorios de código que mantiene todo el equipo de desarrollo. Al contar el total de repositorios se puede conocer la escala y la complejidad de los repositorios del equipo.',
    'definition' => "Suma de la cantidad de todos los repositorios, sin contar los eliminados"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de pipelines por sistema',
    'alias'      => 'Total de pipelines',
    'code'       => 'count_of_pipeline',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'pipeline',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de pipelines por sistema es el conteo de todos los pipelines del sistema; refleja el grado en que el proyecto o la organización adopta procesos automatizados en el desarrollo y la entrega de software.',
    'definition' => "所有流水线的个数求和\n不统计已删除"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones de pipeline por sistema',
    'alias'      => 'Ejecuciones de pipeline del sistema',
    'code'       => 'count_of_compile_pipeline',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'pipeline',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Las ejecuciones de pipeline por sistema son la cantidad de ejecuciones de pipeline en un período determinado; reflejan la eficiencia de desarrollo y la capacidad de respuesta del equipo. Un número alto de ejecuciones de pipeline suele indicar que el equipo puede integrar rápidamente los cambios de código en la rama principal y entregar oportunamente nuevas funcionalidades o correcciones. Monitorear esta métrica ayuda al equipo a optimizar el proceso de desarrollo y a asegurar entregas eficientes y estables.',
    'definition' => "系统的流水线执行数量\n不统计已删除代码库\n不统计已删除流水线"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Duración promedio de ejecución de pipeline por sistema',
    'alias'      => 'Duración promedio de ejecución de pipeline del sistema',
    'code'       => 'avg_of_compile_time_pipeline',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'pipeline',
    'unit'       => 'hour',
    'dateType'   => 'day',
    'desc'       => 'La duración promedio de ejecución de pipeline por sistema es el tiempo de ejecución de los pipelines en un período determinado / la cantidad de ejecuciones. Al contar la duración de cada ejecución de pipeline en un rango de tiempo y calcular el promedio, el equipo puede conocer a fondo el rendimiento de los procesos de construcción y despliegue, identificar oportunamente posibles cuellos de botella y optimizar el flujo de trabajo.',
    'definition' => "系统的流水线执行时间/执行数量\n不统计已删除流水线"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de éxito de ejecución de pipeline por sistema',
    'alias'      => 'Tasa de éxito de ejecución de pipeline del sistema',
    'code'       => 'rate_of_success_pipeline',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'pipeline',
    'unit'       => 'percentage',
    'dateType'   => 'day',
    'desc'       => 'La tasa de éxito de ejecución de pipeline por sistema es la cantidad de ejecuciones de pipeline exitosas en un período determinado / la cantidad de ejecuciones de pipeline; refleja la estabilidad y la confiabilidad de los procesos automatizados de construcción y despliegue.',
    'definition' => "系统的流水线执行成功数量/流水线执行数量\n不统计已删除代码库\n不统计已删除流水线"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de repositorios de artefactos por sistema',
    'alias'      => 'Total de repositorios de artefactos',
    'code'       => 'count_of_artifactrepo',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'artifact',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de repositorios de artefactos por sistema es el conteo del total de repositorios de artefactos de todos los productos; refleja la cantidad de artefactos que administra el equipo de desarrollo. Esta métrica ayuda al equipo a evaluar la complejidad y la eficiencia de la gestión de artefactos y a optimizar y ajustar según sea necesario.',
    'definition' => "所有制品库的个数求和\n不统计已删除"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de nodos por sistema',
    'alias'      => 'Total de nodos',
    'code'       => 'count_of_node',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'node',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de nodos por sistema es la cantidad total de nodos utilizados en la plataforma ZenTao DevOps.',
    'definition' => "Suma de la cantidad de todos los nodos"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de aplicaciones por sistema',
    'alias'      => 'Total de aplicaciones',
    'code'       => 'count_of_application',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'application',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de aplicaciones por sistema es la cantidad total de aplicaciones utilizadas en la plataforma ZenTao DevOps.',
    'definition' => "Suma de la cantidad de todas las aplicaciones instaladas"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de incidencias pendientes de repositorios por sistema',
    'alias'      => 'Incidencias pendientes de repositorios',
    'code'       => 'count_of_pending_issue',
    'purpose'    => 'qc',
    'scope'      => 'system',
    'object'     => 'codebase',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de incidencias pendientes de repositorios por sistema es el conteo de problemas aún sin resolver en todos los repositorios; refleja el estado de salud de los repositorios y la cantidad de posibles problemas existentes. Al monitorear y analizar el total de incidencias se pueden detectar y resolver oportunamente los problemas, mejorando la eficiencia y la calidad del proceso de desarrollo de software.',
    'definition' => "所有代码库的未关闭代码问题个数求和\n不统计删除的问题\n不统计删除的代码库里的问题"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de solicitudes de fusión pendientes en repositorios por sistema',
    'alias'      => 'Solicitudes de fusión pendientes en repositorios',
    'code'       => 'count_of_pending_mergeRequest',
    'purpose'    => 'qc',
    'scope'      => 'system',
    'object'     => 'codebase',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de solicitudes de fusión pendientes por sistema es la cantidad total de solicitudes de fusión que esperan ser fusionadas en los repositorios; refleja la eficiencia y el avance del equipo en la fusión de código. Una cantidad alta puede indicar dificultades de fusión, muchos conflictos de fusión, baja calidad del código, etc.; se debe prestar atención y atender oportunamente para mejorar la eficiencia del desarrollo.',
    'definition' => "所有代码库的未关闭的合并请求个数求和 \n不统计已删除的合并请求\n不统计已删除代码库里的合并请求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de planes por producto',
    'alias'      => 'Total de planes',
    'code'       => 'count_of_productplan_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'productplan',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de planes por producto es la cantidad de todos los planes creados por el equipo de producto. Esta métrica puede reflejar la capacidad de planificación del equipo de producto. Una cantidad adecuada de planes puede ayudar al equipo a completar los requerimientos de manera eficiente.',
    'definition' => "产品中计划的个数求和\n过滤已删除的计划\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Planes nuevos por año por producto',
    'alias'      => 'Planes nuevos',
    'code'       => 'count_of_annual_created_productplan_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'productplan',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los planes nuevos por año por producto son la cantidad de planes recién creados por el equipo de producto en un año. Esta métrica puede reflejar la capacidad del equipo de producto para recibir nuevos requerimientos y la expansión de su escala. Cuantos más planes nuevos, más nuevos retos y requerimientos enfrentó el equipo de producto durante ese año.',
    'definition' => "产品中创建时间为某年的计划个数求和\n过滤已删除的计划\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Planes completados por año por producto',
    'alias'      => 'Planes completados',
    'code'       => 'count_of_annual_finished_productplan_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'productplan',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los planes completados por año por producto son la cantidad de planes que el equipo de producto realmente completó en un año. Esta métrica puede reflejar la eficiencia y la capacidad de ejecución del equipo de producto en la planificación y la ejecución. Cuantos más planes completados, más resultados y entregables pudo haber logrado el equipo de producto durante ese año.',
    'definition' => "产品中计划个数求和\n完成时间为某年\n过滤已删除的计划\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de lanzamientos por producto',
    'alias'      => 'Total de lanzamientos',
    'code'       => 'count_of_release_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'release',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de lanzamientos por producto es la cantidad de todos los lanzamientos del producto. Esta métrica puede reflejar la frecuencia de lanzamientos del producto y el grado de control de estabilidad del equipo. Cuantos más lanzamientos, más iteraciones y actualizaciones de versión tiene el producto.',
    'definition' => "产品中发布的个数求和\n过滤已删除的发布\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Lanzamientos nuevos por año por producto',
    'alias'      => 'Lanzamientos nuevos',
    'code'       => 'count_of_annual_created_release_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'release',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los lanzamientos nuevos por año por producto son la cantidad de lanzamientos agregados al producto en un año; esta métrica puede reflejar la capacidad y la velocidad del equipo de producto para lanzar nuevas funcionalidades y mejoras durante ese año. Cuantos más lanzamientos nuevos, más nuevas funcionalidades y mejoras presentó el equipo de producto durante ese año.',
    'definition' => "产品中发布个数求和\n发布时间为某年\n过滤已删除的发布\n过滤已删除的产品\n过滤无效时间"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Lanzamientos nuevos por mes por producto',
    'alias'      => 'Lanzamientos nuevos',
    'code'       => 'count_of_monthly_created_release_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'release',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Los lanzamientos nuevos por mes por producto son la cantidad de lanzamientos agregados al producto en un mes. Esta métrica puede reflejar la capacidad y la velocidad del equipo de producto para lanzar nuevas funcionalidades y mejoras durante ese mes. Cuantos más lanzamientos nuevos, más nuevas funcionalidades y mejoras presentó el equipo de producto durante ese mes.',
    'definition' => "产品中发布时间为某年某月的发布个数求和\n过滤已删除的发布\n过滤已删除的产品\n过滤无效时间"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de Historias (SR) por producto',
    'alias'      => 'Total de historias',
    'code'       => 'count_of_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de Historias (SR) por producto es la cantidad de todas las Historias creadas en el producto. Esta métrica puede reflejar la escala del trabajo de desarrollo que debe realizar el equipo. Cuanto mayor es el total de Historias, más grande puede ser el producto y más trabajo de desarrollo enfrenta.',
    'definition' => "产品中研发需求的个数求和\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) completadas por producto',
    'alias'      => 'Historias completadas',
    'code'       => 'count_of_finished_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) completadas por producto son la cantidad de Historias con estado cerrado y motivo de cierre completada. Esta métrica puede reflejar el avance y la capacidad de entrega del equipo de producto durante el desarrollo. Cuantas más Historias completadas, más resultados de desarrollo pudo haber logrado el equipo de producto.',
    'definition' => "产品中的研发需求个数求和\n阶段为已关闭\n关闭原因为已完成\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) cerradas por producto',
    'alias'      => 'Historias cerradas',
    'code'       => 'count_of_closed_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) cerradas por producto son la cantidad de Historias que ya se cerraron en el producto. Esta métrica refleja el avance del desarrollo del producto y puede usarse para evaluar el desempeño y los resultados de la gestión de Historias del producto. Un número alto de Historias cerradas puede indicar que el equipo logró más resultados de desarrollo.',
    'definition' => "产品中研发需求的个数求和\n阶段为已关闭\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) no cerradas por producto',
    'alias'      => 'Historias sin cerrar',
    'code'       => 'count_of_unclosed_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) no cerradas por producto son la cantidad de Historias que no se han cerrado en el producto. Esta métrica puede reflejar el avance del desarrollo de las Historias del equipo de producto. Cuantas más Historias no cerradas, más trabajo de desarrollo sigue en curso y requiere seguimiento adicional hasta completarse.',
    'definition' => "复用：\n按产品统计的研发需求总数\n按产品统计的已关闭研发需求数\n按产品统计的关闭研发需求总数=按产品统计的研发需求总数-按产品统计的已关闭研发需求数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) entregadas por producto',
    'alias'      => 'Historias entregadas',
    'code'       => 'count_of_delivered_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) entregadas por producto indican la cantidad de Historias que ya se entregaron a los usuarios. Esta métrica refleja la cantidad de Historias del producto que fueron lanzadas o cuyo motivo de cierre es completada, y puede usarse para evaluar la capacidad de entrega de Historias del producto.',
    'definition' => "产品中研发需求个数求和\n所处阶段为已发布或关闭原因为已完成\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) inválidas por producto',
    'alias'      => 'Historias inválidas',
    'code'       => 'count_of_invalid_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) inválidas por producto son la cantidad de Historias del producto que fueron juzgadas como inválidas. Esta métrica puede reflejar la efectividad y la capacidad del equipo de producto en la gestión de requerimientos. Cuantas más Historias inválidas, puede indicar que el equipo de producto tiene una colaboración débil en la gestión de requerimientos o que existen desviaciones en la comprensión del producto, entre otros.',
    'definition' => "产品中研发需求个数求和\n关闭原因为重复、不做、设计如此和已取消\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) válidas por producto',
    'alias'      => 'Historias válidas',
    'code'       => 'count_of_valid_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) válidas por producto son la cantidad de Historias confirmadas como válidas en el producto. Un requerimiento válido es el que se ajusta a la estrategia y los objetivos del producto, puede implementarse y tiene valor para los usuarios. Un número alto de Historias válidas suele indicar que las funcionalidades y características del producto cumplen las expectativas de los usuarios y del mercado, lo que favorece una entrega exitosa y la satisfacción de los usuarios.',
    'definition' => "复用：\n按产品统计的研发需求总数\n按产品统计的无效研发需求数\n公式：\n按产品统计的有效研发需求数=按产品统计的研发需求总数-按产品统计的无效研发需求数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) con desarrollo finalizado por producto',
    'alias'      => 'Historias (SR) con desarrollo finalizado',
    'code'       => 'count_of_developed_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) con desarrollo finalizado por producto son la cantidad de Historias del producto cuya etapa es desarrollo finalizado o posterior. Esta métrica puede reflejar el avance y los logros del producto en el proceso de desarrollo. Cuantas más Historias con desarrollo finalizado, más resultados de desarrollo ha logrado el producto.',
    'definition' => "产品中研发需求个数求和\n阶段为（研发完毕、测试中、测试完毕、已验收、已发布）或关闭原因为已完成的\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de Historias (SR) con desarrollo finalizado por producto',
    'alias'      => 'Tamaño de Historias (SR) con desarrollo finalizado',
    'code'       => 'scale_of_developed_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'El tamaño de Historias (SR) con desarrollo finalizado por producto es el tamaño de las Historias del producto cuya etapa es desarrollo finalizado o posterior. Esta métrica puede reflejar el avance y los logros del producto en el proceso de desarrollo. Cuanto mayor es el tamaño de Historias con desarrollo finalizado, más resultados de desarrollo ha logrado el producto.',
    'definition' => "产品中研发需求规模数求和\n阶段为（研发完毕、测试中、测试完毕、已验收、已发布）或关闭原因为已完成的\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Cobertura de casos de prueba de las Historias (SR) aprobadas en proyecto por producto',
    'alias'      => 'Cobertura de casos de prueba de las Historias (SR) aprobadas en proyecto',
    'code'       => 'case_coverage_of_projected_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La cobertura de casos de prueba de las Historias (SR) aprobadas en proyecto por producto es el grado de cobertura de casos de prueba de las Historias del producto que ya fueron aprobadas en un proyecto. La cobertura de casos de prueba permite medir qué tan completos son el plan de pruebas y la redacción de casos de prueba del equipo de producto para las Historias aprobadas. Una cobertura alta puede indicar que el equipo de producto cuenta con un plan de pruebas más completo.',
    'definition' => "复用：\n按产品统计的已立项研发需求数\n按产品统计的有用例的已立项研发需求数\n公式：\n按产品统计的已立项研发需求用例覆盖率=按产品统计的有用例的已立项研发需求数/按产品统计的已立项研发需求数\n过滤已删除的研发需求\n过滤已删除的产品\n过滤已删除的用例"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) nuevas por año por producto',
    'alias'      => 'Historias nuevas',
    'code'       => 'count_of_annual_created_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las Historias (SR) nuevas por año por producto son la cantidad de Historias agregadas al producto en un año. Esta métrica puede reflejar el crecimiento o los cambios de requerimientos del equipo de producto durante ese año.',
    'definition' => "产品中研发需求的个数求和\n创建时间为某年\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) completadas por año por producto',
    'alias'      => 'Historias completadas',
    'code'       => 'count_of_annual_finished_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las Historias (SR) completadas por año por producto son la cantidad de Historias del producto con estado cerrado y motivo de cierre completada en un año. Esta métrica puede reflejar la eficiencia de desarrollo y los resultados del equipo de producto durante el año. Un aumento en las Historias completadas indica que el equipo de producto logró más resultados de desarrollo y entregables durante ese año.',
    'definition' => "产品中关闭时间在某年且关闭原因为已完成的研发需求的个数求和\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) entregadas por año por producto',
    'alias'      => 'Historias entregadas',
    'code'       => 'count_of_annual_delivered_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las Historias (SR) entregadas por año por producto son la cantidad de Historias del producto que se entregaron con éxito a los usuarios durante un año. Esta métrica puede reflejar la capacidad de entrega y de colaboración del equipo de producto durante el desarrollo, y puede usarse para evaluar la eficacia y el efecto de la entrega de Historias del producto. Cuantas más Historias entregadas, más resultados de entrega pudo haber logrado el equipo de producto durante ese año.',
    'definition' => "产品中研发需求个数求和\n所处阶段为已发布且发布时间为某年或关闭原因为已完成且关闭时间为某年\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) cerradas por año por producto',
    'alias'      => 'Historias (SR) cerradas',
    'code'       => 'count_of_annual_closed_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'El tamaño de Historias (SR) cerradas por año por producto indica la cantidad de Historias que el producto cerró en un año. Esta métrica refleja la cantidad de Historias que el equipo de producto cierra cada año por motivos como completada, no se hará o cancelada, y puede usarse para evaluar la gestión y el ajuste del tamaño de las Historias del equipo de producto.',
    'definition' => "产品中关闭时间在某年的研发需求的个数求和\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) completadas por mes por producto',
    'alias'      => 'Historias completadas',
    'code'       => 'count_of_monthly_finished_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Las Historias (SR) completadas por mes por producto indican la cantidad de Historias completadas cada mes. Esta métrica refleja los resultados mensuales de desarrollo del producto y puede usarse para evaluar el cumplimiento y la eficiencia del equipo de producto en las Historias.',
    'definition' => "产品中关闭时间为某年某月且关闭原因为已完成的研发需求的个数求和\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) aprobadas en proyecto por producto',
    'alias'      => 'Historias (SR) aprobadas en proyecto',
    'code'       => 'count_of_projected_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) aprobadas en proyecto por producto son la cantidad de Historias del producto que ya se vincularon a un proyecto. Esta métrica indica la cantidad de requerimientos del producto aprobados para invertir recursos en su desarrollo. Una cantidad alta de Historias aprobadas en proyecto puede indicar que los proyectos relacionados con el producto son de mayor escala.',
    'definition' => "产品中研发需求个数求和\n过滤已删除的产品\n过滤已删除的研发需求\n研发需求被关联进项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) entregadas por mes por producto',
    'alias'      => 'Historias entregadas',
    'code'       => 'count_of_monthly_delivered_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Las Historias (SR) entregadas por mes por producto indican la cantidad de Historias completadas o vinculadas a un lanzamiento cada mes. Esta métrica refleja la cantidad de Historias que el equipo de producto entrega a los usuarios cada mes y puede usarse para evaluar la eficacia de entrega de Historias del equipo de producto.',
    'definition' => "产品中研发需求个数求和\n所处阶段为已发布且发布时间为某年某月或关闭原因为已完成且关闭时间为某年某月\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) aprobadas en proyecto con casos de prueba por producto',
    'alias'      => 'Historias (SR) aprobadas en proyecto con casos de prueba',
    'code'       => 'count_of_projected_story_with_case_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) aprobadas en proyecto con casos de prueba por producto son la cantidad de Historias del producto vinculadas a un proyecto que tienen casos de prueba. Esta métrica refleja la situación de redacción de casos de prueba para las Historias aprobadas del producto. Una cantidad alta de Historias aprobadas con casos de prueba puede indicar una mayor cobertura de casos de prueba de los requerimientos.',
    'definition' => "产品中研发需求个数求和\n研发需求关联进项目\n过滤已删除的产品\n过滤已删除的研发需求\n过滤没有用例的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) cerradas por mes por producto',
    'alias'      => 'Historias (SR) cerradas',
    'code'       => 'count_of_monthly_closed_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'El tamaño de Historias (SR) cerradas por mes por producto indica la cantidad de Historias que el producto cerró en un mes. Esta métrica refleja la cantidad de Historias que el equipo de producto cierra cada mes por motivos como completada, no se hará o cancelada, y puede usarse para evaluar la gestión y el ajuste del tamaño de las Historias del equipo de producto.',
    'definition' => "产品中关闭时间为某年某月的研发需求的个数求和\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) nuevas por mes por producto',
    'alias'      => 'Historias nuevas',
    'code'       => 'count_of_monthly_created_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Las Historias (SR) nuevas por mes por producto son la cantidad de Historias agregadas en un mes. Esta métrica puede reflejar el crecimiento de requerimientos del equipo de producto durante ese mes. Un número alto de Historias nuevas por mes puede indicar que el equipo lanza continuamente nuevas funcionalidades.',
    'definition' => "产品中研发需求的个数求和\n创建时间在某年某月\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño total de Historias (SR) por producto',
    'alias'      => 'Total del tamaño de historias',
    'code'       => 'scale_of_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'measure',
    'dateType'   => 'nodate',
    'desc'       => 'El tamaño total de Historias (SR) por producto indica el tamaño total de todas las Historias del producto. Esta métrica puede reflejar la escala del trabajo de desarrollo que debe realizar el equipo y puede usarse para evaluar la gestión del tamaño de las Historias y los resultados del equipo de producto.',
    'definition' => "产品中研发需求的规模数求和\n过滤父研发需求\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de Historias (SR) completadas por año por producto',
    'alias'      => 'Tamaño de historias completadas',
    'code'       => 'scale_of_annual_finished_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'measure',
    'dateType'   => 'year',
    'desc'       => 'El tamaño de Historias (SR) completadas por año por producto es el tamaño total de las Historias del producto con estado cerrado y motivo de cierre completada en un año. Esta métrica puede reflejar la eficiencia de desarrollo y los resultados del equipo de producto durante el año. Un aumento en el tamaño de Historias completadas indica que el equipo de producto logró más resultados de desarrollo y entregables durante ese año.',
    'definition' => "产品中研发需求的规模数求和\n关闭时间在某年\n关闭原因为已完成\n过滤父研发需求\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de Historias (SR) entregadas por año por producto',
    'alias'      => 'Tamaño de historias entregadas',
    'code'       => 'scale_of_annual_delivered_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'measure',
    'dateType'   => 'year',
    'desc'       => 'El tamaño de Historias (SR) entregadas por año por producto es el tamaño de las Historias del producto que se entregaron con éxito a los usuarios durante un año. Esta métrica puede reflejar la capacidad de entrega y de colaboración del equipo de producto durante el desarrollo, y puede usarse para evaluar la eficacia y el efecto de la entrega de Historias del producto. Cuanto mayor es el tamaño de Historias entregadas, más resultados de entrega pudo haber logrado el equipo de producto durante ese año.',
    'definition' => "产品中研发需求规模数求和\n所处阶段为已发布且发布时间为某年某月或关闭原因为已完成且关闭时间为某年某月\n过滤父研发需求\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de Historias (SR) cerradas por año por producto',
    'alias'      => 'Tamaño de historias cerradas',
    'code'       => 'scale_of_annual_closed_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'measure',
    'dateType'   => 'year',
    'desc'       => 'El tamaño de Historias (SR) cerradas por año por producto indica el tamaño total de las Historias que el producto cerró en un año. Esta métrica refleja el tamaño total de las Historias que el equipo de producto cierra cada año por motivos como completada, no se hará o cancelada, y puede usarse para evaluar la gestión y el ajuste del tamaño de las Historias del equipo del producto.',
    'definition' => "产品中研发需求的规模数求和\n关闭时间在某年\n过滤父研发需求\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de Historias (SR) completadas por mes por producto',
    'alias'      => 'Tamaño de historias completadas',
    'code'       => 'scale_of_monthly_finished_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'El tamaño de Historias (SR) completadas por mes por producto indica el tamaño de las Historias completadas cada mes. Esta métrica refleja el tamaño de las Historias que el equipo de producto completa cada mes y puede usarse para evaluar el cumplimiento y la eficiencia del equipo de producto en las Historias.',
    'definition' => "产品中关闭时间为某年某月且关闭原因为已完成的研发需求的规模数求和\n过滤父需求\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de aprobación de revisión de Historias (SR) por producto',
    'alias'      => 'Tasa de aprobación de revisión de Historias (SR)',
    'code'       => 'rate_of_approved_story_in_product',
    'purpose'    => 'qc',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de aprobación de revisión de Historias (SR) por producto indica la proporción de Historias del producto que pasaron la revisión (las que no requieren revisión más las que requieren revisión y la aprobaron) respecto a las Historias revisadas (las que no requieren revisión más las que tienen resultado de revisión). Esta métrica refleja la tasa de éxito en el proceso de revisión de requerimientos.',
    'definition' => "按产品统计的所有研发需求评审通过率=（按产品统计的不需要评审的研发需求数+评审结果确认通过的研发需求数）/（按产品统计的不需要评审的研发需求数+有评审结果的研发需求数）\n过滤已删除的研发需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de finalización de Historias (SR) por producto',
    'alias'      => 'Tasa de finalización de historias',
    'code'       => 'rate_of_finish_story_in_product',
    'purpose'    => 'rate',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de entrega de Historias (SR) por producto indica el tamaño de las Historias completadas por producto respecto a las Historias válidas por producto. Esta métrica mide la capacidad del equipo de desarrollo para completar requerimientos. Cuanto mayor es la tasa de finalización, más resultados de desarrollo tiene el equipo, lo que asegura el lanzamiento normal del producto.',
    'definition' => "复用：\n按产品统计的已完成研发需求数\n按产品统计的无效研发需求数\n按产品统计的研发需求总数\n公式：\n按产品统计的研发需求完成率=按产品统计的已完成研发需求数/（按产品统计的研发需求总数-按产品统计的无效研发需求数）*100%"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de entrega de Historias (SR) por producto',
    'alias'      => 'Tasa de entrega de historias',
    'code'       => 'rate_of_delivery_story_in_product',
    'purpose'    => 'rate',
    'scope'      => 'product',
    'object'     => 'story',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de entrega de Historias (SR) por producto indica la cantidad de Historias entregadas por producto respecto a las Historias válidas por producto. Esta métrica mide la capacidad del equipo de producto para entregar requerimientos a tiempo. Cuanto mayor es la tasa de entrega, más requerimientos puede entregar el equipo de producto a los usuarios.',
    'definition' => "复用：\n按产品统计的已交付研发需求数\n按产品统计的无效研发需求数\n按产品统计的研发需求总数\n公式：\n按产品统计的研发需求完成率=按产品统计的已交付研发需求数/（按产品统计的研发需求总数-按产品统计的无效研发需求数）*100%"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de Requerimientos de usuario (UR) por producto',
    'alias'      => 'Total de Requerimientos de usuario (UR)',
    'code'       => 'count_of_requirement_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'requirement',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de Requerimientos de usuario (UR) por producto es el total de todos los Requerimientos de usuario del producto. Esta métrica refleja el grado de dominio y comprensión general de la cantidad de requerimientos de los usuarios. Un número alto de Requerimientos de usuario puede indicar un mayor potencial de mercado y mayor popularidad del producto, con más usuarios que plantearon requerimientos sobre él.',
    'definition' => "产品中用户需求的个数求和\n过滤已删除的用户需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Requerimientos de usuario (UR) nuevos por año por producto',
    'alias'      => 'Requerimientos de usuario (UR) nuevos',
    'code'       => 'count_of_annual_created_requirement_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'requirement',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los Requerimientos de usuario (UR) nuevos por año por producto reflejan la cantidad de requerimientos de usuarios generados sobre el producto durante un año. Un número alto de Requerimientos de usuario puede indicar que el producto obtuvo más atención y reconocimiento de los usuarios ese año, y que más usuarios están dispuestos a probarlo y usarlo.',
    'definition' => "产品中用户需求的个数求和\n创建时间为某年\n过滤已删除的用户需求\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Densidad de Bugs por tamaño de Historias con desarrollo finalizado por producto',
    'alias'      => 'Densidad de Bugs por tamaño de Historias con desarrollo finalizado',
    'code'       => 'bug_concentration_of_developed_story_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'La densidad de Bugs por tamaño de Historias con desarrollo finalizado por producto indica la cantidad de Bugs válidos por producto respecto al tamaño de las Historias con desarrollo completado por producto. Esta métrica refleja el desempeño de calidad de las Historias con desarrollo finalizado; cuanto menor es la densidad, mayor es la calidad de las Historias con desarrollo finalizado.',
    'definition' => "复用：\n按产品统计的有效Bug数\n按产品统计的研发完成的研发需求规模数\n公式：\n按产品统计的研发完成需求的Bug密度=按产品统计的有效Bug数/按产品统计的研发完成的研发需求规模数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de Bugs por producto',
    'alias'      => 'Total de Bugs',
    'code'       => 'count_of_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de Bugs por producto es la cantidad de todos los Bugs encontrados en el producto. Esta métrica refleja la situación general de calidad de Bugs del producto. Un total alto de Bugs puede indicar problemas en la calidad del código del producto, que requieren mayor resolución y mejora.',
    'definition' => "产品中Bug的个数求和\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs activos por producto',
    'alias'      => 'Bugs activos',
    'code'       => 'count_of_activated_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs activos por producto son la cantidad de Bugs del producto cuyo estado actual es activo. Esta métrica refleja la cantidad de problemas pendientes que existen actualmente en el producto. Un total alto de Bugs activos puede indicar una menor estabilidad del producto, por lo que se debe reforzar la velocidad y la calidad de la resolución de Bugs.',
    'definition' => "产品中激活Bug的个数求和\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs válidos por producto',
    'alias'      => 'Bugs válidos',
    'code'       => 'count_of_effective_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs válidos por producto son la cantidad de Bugs del producto que realmente tienen impacto y valor. Un Bug válido suele ser el que provoca que el producto no funcione con normalidad o afecta la experiencia del usuario. Contar los Bugs válidos ayuda a evaluar la estabilidad y la calidad del producto, y también la colaboración entre los probadores o su conocimiento del producto.',
    'definition' => "产品中所有Bug个数求和\n解决方案为已解决、延期处理或状态为激活\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs corregidos por producto',
    'alias'      => 'Bugs corregidos',
    'code'       => 'count_of_fixed_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs corregidos por producto son la cantidad de Bugs cuya solución es resuelto y cuyo estado es cerrado. Esta métrica refleja la cantidad de problemas que el producto ha resuelto. Los Bugs corregidos permiten evaluar la eficiencia de trabajo del equipo de desarrollo en la resolución de Bugs.',
    'definition' => "产品中Bug的个数求和\n解决方案为已解决\n状态为已关闭\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs con severidad de nivel 1 por producto',
    'alias'      => 'Bugs con severidad de nivel 1',
    'code'       => 'count_of_severity_1_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs con severidad de nivel 1 por producto son la cantidad de Bugs encontrados durante el desarrollo del producto que tienen un impacto grave en la funcionalidad o el rendimiento del producto. Estos Bugs pueden causar problemas serios como caídas del sistema, funciones que no operan con normalidad o pérdida de datos. Contar estos Bugs ayuda a evaluar la estabilidad y la confiabilidad del producto.',
    'definition' => "产品中Bug的个数求和\n严重程度为1级\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs con severidad de nivel 2 por producto',
    'alias'      => 'Bugs con severidad de nivel 2',
    'code'       => 'count_of_severity_2_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs con severidad de nivel 2 por producto son la cantidad de Bugs encontrados durante el desarrollo del producto que tienen un impacto considerable en la funcionalidad o el rendimiento del producto. Estos Bugs pueden causar inconvenientes a los usuarios o afectar algunas funciones del producto. Contar estos Bugs ayuda a evaluar la estabilidad y la confiabilidad del producto.',
    'definition' => "产品的Bug个数求和\n严重程度为2级\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs con severidad de nivel 1 y 2 por producto',
    'alias'      => 'Bugs con severidad de nivel 1 y 2',
    'code'       => 'count_of_severe_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs con severidad de nivel 1 y 2 por producto son la suma de la cantidad de Bugs con severidad de nivel 1 y de nivel 2 encontrados durante el desarrollo del producto. Contar estos Bugs permite evaluar la calidad y la estabilidad del producto, y también prestar atención a los problemas que afectan la experiencia del usuario y la integridad de las funciones.',
    'definition' => "复用：\n按产品统计的严重程度为1级的Bug数\n按产品统计的严重程度为2级的Bug数\n公式：\n按产品统计的严重程度为1、2级的Bug数=按产品统计的严重程度为1级的Bug数+按产品统计的严重程度为2级的Bug数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs nuevos por año por producto',
    'alias'      => 'Bugs nuevos',
    'code'       => 'count_of_annual_created_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los Bugs nuevos por año por producto son la cantidad de Bugs recién encontrados en el producto durante un año. Esta métrica refleja la cantidad de problemas nuevos que aparecieron en el producto ese año. Un número alto de Bugs nuevos al año puede indicar problemas en el control de calidad, que deben atenderse y mejorarse oportunamente.',
    'definition' => "产品中Bug的个数求和\n创建时间为某年\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs válidos nuevos por año por producto',
    'alias'      => 'Bugs válidos nuevos',
    'code'       => 'count_of_annual_created_effective_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los Bugs válidos nuevos por año por producto son la cantidad de Bugs recién encontrados en el producto durante un año que realmente tienen impacto y valor. Un Bug válido suele ser el que provoca que el producto no funcione con normalidad o afecta la experiencia del usuario. Contar los Bugs válidos ayuda a evaluar la estabilidad y la calidad del producto, y también la colaboración entre los probadores o su conocimiento del producto.',
    'definition' => "产品中Bug个数求和\n创建时间为某年\n解决方案为已解决和延期处理或者状态为激活\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs corregidos por año por producto',
    'alias'      => 'Bugs corregidos',
    'code'       => 'count_of_annual_fixed_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los Bugs corregidos por año por producto son la cantidad de Bugs resueltos y cerrados durante un año. Esta métrica refleja la cantidad de problemas que el producto resolvió ese año. Un número alto de Bugs corregidos al año puede indicar que el equipo de desarrollo es eficiente en la resolución de Bugs.',
    'definition' => "产品中Bug的个数求和\n关闭时间为某年\n解决方案为已解决\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs nuevos por día por producto',
    'alias'      => 'Bugs nuevos',
    'code'       => 'count_of_daily_created_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Los Bugs nuevos por día por producto son la cantidad de Bugs recién encontrados y registrados cada día durante el desarrollo del producto. Esta métrica puede mostrar la velocidad y la tendencia de detección de Bugs en el desarrollo del producto; un número alto de Bugs nuevos puede indicar que hay muchos problemas por resolver, y también ayuda a identificar cuellos de botella y posibles riesgos de calidad en el desarrollo del producto.',
    'definition' => "产品中Bug数求和\n创建时间为某日\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs resueltos por día por producto',
    'alias'      => 'Bugs resueltos',
    'code'       => 'count_of_daily_resolved_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Los Bugs resueltos por día por producto son la cantidad de Bugs que el producto resuelve cada día. Esta métrica nos ayuda a conocer la velocidad y la eficiencia del equipo de desarrollo para resolver Bugs.',
    'definition' => "产品中Bug数求和\n解决日期为某日\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs cerrados por día por producto',
    'alias'      => 'Bugs cerrados',
    'code'       => 'count_of_daily_closed_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Los Bugs cerrados por día por producto son la cantidad de Bugs que se cierran cada día en el producto. Esta métrica nos ayuda a conocer la velocidad y la eficiencia del equipo de desarrollo para confirmar y cerrar los Bugs ya resueltos; al comparar la cantidad de Bugs cerrados en distintos períodos se puede evaluar la colaboración y la capacidad de atención de problemas del equipo de desarrollo.',
    'definition' => "产品中Bug数求和\n关闭时间为某日\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs corregidos por mes por producto',
    'alias'      => 'Bugs resueltos',
    'code'       => 'count_of_monthly_fixed_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Los Bugs corregidos por mes por producto son la cantidad de Bugs resueltos y cerrados durante el desarrollo del producto. Esta métrica nos ayuda a conocer la velocidad y la eficiencia del equipo de desarrollo para resolver Bugs.',
    'definition' => "产品中Bug的个数求和\n关闭时间为某年某月\n解决方案为已解决\n过滤已删除的Bug\n过滤已删除的产品\n",
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs cerrados por mes por producto',
    'alias'      => 'Bugs cerrados',
    'code'       => 'count_of_monthly_closed_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Los Bugs cerrados por mes por producto son la cantidad de Bugs cerrados en un mes. Esta métrica refleja la cantidad de Bugs confirmados y cerrados cada mes durante el desarrollo del producto. Esta métrica nos ayuda a conocer la velocidad y la eficiencia del equipo de desarrollo para confirmar y cerrar los Bugs.',
    'definition' => "产品中关闭时间在某年某月的Bug个数求和\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs nuevos por mes por producto',
    'alias'      => 'Bugs nuevos',
    'code'       => 'count_of_monthly_created_bug_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Los Bugs nuevos por mes por producto son la cantidad de Bugs recién encontrados en un mes. Esta métrica refleja la cantidad de problemas nuevos que aparecieron en el sistema o el proyecto durante ese mes. Un aumento en los Bugs nuevos por mes puede indicar problemas en el control de calidad, que deben atenderse y mejorarse oportunamente.',
    'definition' => "产品中创建时间在某年某月的Bug个数求和\n过滤已删除的Bug\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de corrección de Bugs por producto',
    'alias'      => 'Tasa de corrección de Bugs',
    'code'       => 'rate_of_fixed_bug_in_product',
    'purpose'    => 'rate',
    'scope'      => 'product',
    'object'     => 'bug',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de corrección de Bugs por producto es la proporción de Bugs corregidos por producto respecto a los Bugs válidos por producto. Esta métrica nos ayuda a conocer la eficiencia y la calidad del equipo de desarrollo en la corrección de Bugs; una tasa de corrección alta puede indicar que los Bugs se resuelven oportunamente y que la calidad del producto está bien asegurada.',
    'definition' => "复用：\n按产品统计的修复Bug数\n按产品统计的有效Bug数\n公式：\n按产品统计的Bug修复率=按产品统计的修复Bug数/按产品统计的有效Bug数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de casos de prueba por producto',
    'alias'      => 'Total de casos de prueba',
    'code'       => 'count_of_case_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'case',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de casos de prueba por producto es la cantidad total de casos de prueba del sistema o el proyecto. Los casos de prueba son escenarios de prueba usados para verificar las funciones y el rendimiento del sistema. Contar el total de casos de prueba ayuda a evaluar la amplitud y la profundidad de la cobertura de pruebas. Un total alto de casos de prueba puede indicar que el proyecto se probó de manera integral y suficiente.',
    'definition' => "产品中用例的个数求和\n过滤已删除的用例\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Casos de prueba nuevos por año por producto',
    'alias'      => 'Casos de prueba nuevos',
    'code'       => 'count_of_annual_created_case_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'case',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los casos de prueba nuevos por año por producto son la cantidad de casos de prueba agregados al producto en un año. Contar los casos de prueba nuevos por año ayuda a evaluar la cobertura y la profundidad de las pruebas del sistema o el proyecto en distintas etapas. Un aumento en los casos de prueba nuevos al año puede indicar que las nuevas funcionalidades y requerimientos se probaron suficientemente.',
    'definition' => "产品中用例的个数求和\n创建时间为某年\n过滤已删除的用例\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de retroalimentaciones por producto',
    'alias'      => 'Total de retroalimentaciones',
    'code'       => 'count_of_feedback_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Total de retroalimentaciones del producto',
    'definition' => "产品中反馈的个数求和\n过滤已删除的反馈\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones nuevas por año por producto',
    'alias'      => 'Retroalimentaciones nuevas',
    'code'       => 'count_of_annual_created_feedback_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las retroalimentaciones nuevas por año por producto son la cantidad de retroalimentaciones de usuarios recopiladas durante un año. Esta métrica ayuda al equipo a conocer la tendencia de desarrollo del producto y los cambios en las necesidades de los usuarios, y a ajustar y optimizar la estrategia del producto. Un número alto de retroalimentaciones nuevas al año puede indicar que la base de usuarios del producto creció o que las iteraciones de funcionalidades atrajeron más participación de usuarios, y también puede sugerir que el producto tiene muchos problemas.',
    'definition' => "产品中创建时间为某年的反馈的个数求和\n过滤已删除的反馈\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones cerradas por año por producto',
    'alias'      => 'Retroalimentaciones cerradas',
    'code'       => 'count_of_annual_closed_feedback_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las retroalimentaciones cerradas por año por producto son la cantidad de retroalimentaciones de usuarios atendidas y cerradas durante un año. Esta métrica ayuda al equipo de producto a evaluar su capacidad de respuesta y de resolución de problemas ante la retroalimentación de los usuarios en un año. Un número alto de retroalimentaciones cerradas al año puede indicar que el equipo resuelve la retroalimentación de manera eficiente y mejora continuamente el producto, elevando la satisfacción de los usuarios y la calidad del producto.',
    'definition' => "产品中关闭时间为某年的反馈的个数求和\n过滤已删除的反馈\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tickets en espera por producto',
    'alias'      => 'Tickets en espera',
    'code'       => 'count_of_wait_ticket_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'ticket',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los tickets en espera por producto indican la suma de los tickets del producto cuyo estado es en espera. Cuanto mayor es el valor, más tickets tiene pendientes por atender el equipo de producto, lo que puede reflejar en cierta medida la acumulación de problemas de los clientes.',
    'definition' => "Suma de la cantidad de todos los tickets del producto con estado en espera, excluyendo los tickets eliminados y los productos eliminados."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tickets en proceso por producto',
    'alias'      => 'Tickets en proceso',
    'code'       => 'count_of_doing_ticket_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'ticket',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los tickets en proceso por producto indican la suma de los tickets del producto cuyo estado es en proceso. Cuanto mayor es el valor, más tickets está atendiendo el equipo de producto, lo que puede reflejar en cierta medida la carga de trabajo del equipo.',
    'definition' => "Suma de la cantidad de todos los tickets del producto con estado en proceso, excluyendo los tickets eliminados y los productos eliminados."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tickets procesados por producto',
    'alias'      => 'Tickets procesados',
    'code'       => 'count_of_done_ticket_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'ticket',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los tickets procesados por producto indican la suma de los tickets del producto cuyo estado es procesado. Cuanto mayor es el valor, más tickets ha completado el equipo de producto, lo que puede reflejar en cierta medida la eficiencia del equipo para atender los problemas de los clientes.',
    'definition' => "Suma de la cantidad de todos los tickets del producto con estado procesado, excluyendo los tickets eliminados y los productos eliminados."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tickets no cerrados por producto',
    'alias'      => 'Tickets no cerrados',
    'code'       => 'count_of_unclosed_ticket_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'ticket',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los tickets no cerrados por producto indican la suma de los tickets del producto cuyo estado es no cerrado. Cuanto mayor es el valor, más tareas de tickets debe completar aún el equipo de producto.',
    'definition' => "Suma de la cantidad de todos los tickets del producto, excluyendo los tickets cerrados, los tickets eliminados y los productos eliminados."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tickets nuevos por semana por producto',
    'alias'      => 'Tickets nuevos',
    'code'       => 'count_of_weekly_created_ticket_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'ticket',
    'unit'       => 'count',
    'dateType'   => 'week',
    'desc'       => 'Los tickets nuevos por semana por producto indican la suma de los tickets recién creados en el producto cada semana. Un número alto de tickets nuevos por semana puede indicar que las funcionalidades lanzadas recientemente tienen muchos problemas, que deben atenderse oportunamente.',
    'definition' => "Suma de la cantidad de todos los tickets del producto con fecha de creación en una semana determinada, excluyendo los tickets eliminados y los productos eliminados."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Duración planificada por proyecto',
    'alias'      => 'Duración planificada',
    'code'       => 'planned_period_of_project',
    'purpose'    => 'time',
    'scope'      => 'project',
    'object'     => 'project',
    'unit'       => 'day',
    'dateType'   => 'nodate',
    'desc'       => 'La duración planificada por proyecto es la duración estimada establecida con base en el plan y la programación del proyecto. Esta métrica se calcula determinando el intervalo de tiempo entre las fechas de inicio y fin del proyecto. La duración planificada se usa para establecer los objetivos de tiempo y el cronograma del proyecto, y ofrece una línea base para la gestión del proyecto. Al compararla con la duración real, se puede evaluar el avance del proyecto y la exactitud de la planificación del tiempo, ayudando al equipo a ajustar oportunamente el plan de trabajo.',
    'definition' => "计划完成日期-计划开始日期\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Duración restante por proyecto',
    'alias'      => 'Duración restante',
    'code'       => 'left_period_of_project',
    'purpose'    => 'time',
    'scope'      => 'project',
    'object'     => 'project',
    'unit'       => 'day',
    'dateType'   => 'nodate',
    'desc'       => 'La duración restante por proyecto indica el tiempo de trabajo que le queda al proyecto en el momento actual. Esta métrica ayuda al equipo a evaluar la carga de trabajo restante y el avance del proyecto. Al comparar la duración restante con las horas de trabajo restantes se puede predecir si el proyecto podrá completarse a tiempo y tomar las medidas adecuadas para ajustar el avance y asegurar una entrega exitosa.',
    'definition' => "剩余工期=计划截止日期-当前日期\r\n当剩余工期<0时默认为0\r\n当项目已关闭时剩余工期默认为0\r\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Duración real por proyecto',
    'alias'      => 'Duración real',
    'code'       => 'count_of_actual_time_in_project',
    'purpose'    => 'time',
    'scope'      => 'project',
    'object'     => 'project',
    'unit'       => 'day',
    'dateType'   => 'nodate',
    'desc'       => 'La duración real por proyecto refleja el tiempo que realmente se invirtió durante la ejecución del proyecto. Esta métrica se calcula a partir de las fechas reales de inicio y finalización del proyecto. El registro preciso de la duración real ayuda al equipo a evaluar la eficiencia de ejecución del proyecto y su capacidad de gestión del tiempo. Una duración real corta puede indicar que el proyecto avanza según lo planificado y que el equipo ejecuta con eficiencia, mientras que una duración real larga puede indicar que el proyecto tiene algunos retrasos y desafíos.',
    'definition' => "已关闭的项目：\n实际完成日期-实际开始日期\n未关闭的项目：\n当前日期-实际开始日期\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Desviación de duración por proyecto',
    'alias'      => 'Desviación de duración',
    'code'       => 'variance_of_time_in_project',
    'purpose'    => 'time',
    'scope'      => 'project',
    'object'     => 'project',
    'unit'       => 'day',
    'dateType'   => 'nodate',
    'desc'       => 'La desviación de duración por proyecto indica la diferencia entre la duración real y la duración planificada. Un valor positivo indica que el proyecto va retrasado y un valor negativo indica que va adelantado. La desviación de duración ayuda al equipo a identificar oportunamente las desviaciones del avance del proyecto y a tomar medidas de ajuste para replanificar los recursos y el plan de trabajo, a fin de asegurar que el proyecto se complete a tiempo.',
    'definition' => "复用：\n按项目统计的实际工期\n按项目统计的计划工期\n公式：\n按项目统计的工期偏差=按项目统计的实际工期-按项目统计的计划工期\n其中未开始项目工期偏差为0"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones cerradas por proyecto',
    'alias'      => 'Ejecuciones cerradas',
    'code'       => 'count_of_closed_execution_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las ejecuciones cerradas por proyecto indican la cantidad de ejecuciones que ya están cerradas en el proyecto y sirven para conocer la cantidad de ejecuciones cerradas.',
    'definition' => "项目的执行个数求和\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones suspendidas por proyecto',
    'alias'      => 'Ejecuciones suspendidas',
    'code'       => 'count_of_suspended_execution_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las ejecuciones suspendidas por proyecto indican la cantidad de ejecuciones que están suspendidas en el proyecto y sirven para conocer la cantidad de tareas en pausa, que pueden deberse a requerimientos poco claros u otras razones.',
    'definition' => "项目的执行个数求和\n状态为已挂起\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones en curso por proyecto',
    'alias'      => 'Ejecuciones en curso',
    'code'       => 'count_of_doing_execution_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las ejecuciones en curso por proyecto indican la cantidad de ejecuciones que están en curso en el proyecto y sirven para conocer la cantidad de tareas que se están realizando actualmente, lo que refleja el avance del trabajo del equipo del proyecto.',
    'definition' => "所有的执行个数求和\n状态为进行中\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones sin iniciar por proyecto',
    'alias'      => 'Ejecuciones sin iniciar',
    'code'       => 'count_wait_execution_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las ejecuciones sin iniciar por proyecto indican la cantidad de ejecuciones que no han comenzado en el proyecto y sirven para conocer la cantidad de ejecuciones sin iniciar.',
    'definition' => "项目的执行个数求和\n状态为未开始\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones cerradas por año por proyecto',
    'alias'      => 'Ejecuciones cerradas',
    'code'       => 'count_annual_closed_execution_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las ejecuciones cerradas por año por proyecto son la cantidad de ejecuciones que ya se cerraron en el proyecto durante un año. Esta métrica refleja la eficiencia de trabajo y la capacidad de finalización del equipo del proyecto en ese año. Un número alto de ejecuciones cerradas al año indica que el proyecto muestra una alta eficiencia en la finalización de tareas; de lo contrario, puede ser necesario revisar los flujos de trabajo y la asignación de recursos para mejorar la eficiencia de ejecución.',
    'definition' => "项目的执行个数求和\n关闭时间为某年\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ejecuciones completadas por año por proyecto',
    'alias'      => 'Ejecuciones completadas',
    'code'       => 'count_of_annual_finished_execution_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las ejecuciones completadas por año por proyecto son la cantidad de ejecuciones que el proyecto completó durante un año. Esta métrica refleja la eficiencia de trabajo y la capacidad de finalización del equipo del proyecto en ese año. Un número alto de ejecuciones completadas al año indica que el equipo muestra una alta eficiencia en la finalización de tareas; de lo contrario, puede ser necesario revisar los flujos de trabajo y la asignación de recursos para mejorar la eficiencia de ejecución.',
    'definition' => "项目的执行个数求和\n实际完成日期为某年\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de ejecuciones por proyecto',
    'alias'      => 'Total de ejecuciones',
    'code'       => 'count_of_execution_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'execution',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de ejecuciones por proyecto indica la cantidad de todas las ejecuciones del proyecto y ofrece información útil para evaluar la escala del proyecto, el avance de ejecución, la carga de trabajo, la evaluación del desempeño, el control de riesgos y la gestión del proyecto.',
    'definition' => "项目的执行个数求和\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de Historias (SR) por proyecto',
    'alias'      => 'Total de historias',
    'code'       => 'count_of_story_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de Historias (SR) por proyecto es la cantidad de todas las Historias creadas o vinculadas en el proyecto; refleja la escala y la complejidad del proyecto y ofrece información útil sobre la gestión de requerimientos, el control del avance, la planificación de recursos, la evaluación de riesgos y el control de calidad.',
    'definition' => "项目中研发需求个数求和\n过滤已删除的研发需求\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) cerradas por proyecto',
    'alias'      => 'Historias cerradas',
    'code'       => 'count_of_closed_story_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) cerradas por proyecto son la cantidad de Historias que ya se cerraron en el proyecto; reflejan la cantidad de Historias cerradas en el proyecto y ofrecen información útil sobre la gestión de requerimientos, el avance del proyecto, el control de calidad, la satisfacción de los usuarios y la evaluación del desempeño.',
    'definition' => "项目中研发需求个数求和\n过滤已删除的研发需求\n状态为已关闭\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) no cerradas por proyecto',
    'alias'      => 'Historias sin cerrar',
    'code'       => 'count_of_unclosed_story_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) no cerradas por proyecto son la cantidad de Historias que no se han cerrado en el proyecto; reflejan las tareas y los planes en curso del equipo del proyecto durante el desarrollo. Cuantas más Historias no cerradas, más trabajo de desarrollo sin terminar tiene el equipo del proyecto y se requiere seguimiento adicional para completarlo.',
    'definition' => "复用：\n按项目统计的研发需求总数\n按项目统计的已关闭研发需求数\n公式：\n按项目统计的关闭研发需求数=按项目统计的研发需求总数-按项目统计的已关闭研发需求数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) completadas por proyecto',
    'alias'      => 'Historias completadas',
    'code'       => 'count_of_finished_story_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) completadas por proyecto son la cantidad de Historias con estado cerrado y motivo de cierre completada. Reflejan el avance y la capacidad de entrega del equipo del proyecto durante el desarrollo. Cuantas más Historias completadas, más resultados de desarrollo logró el equipo del proyecto en ese período.',
    'definition' => "项目中研发需求的个数求和\n状态为已关闭\n关闭原因为已完成\n过滤已删除的研发需求\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) inválidas por proyecto',
    'alias'      => 'Historias inválidas',
    'code'       => 'count_of_invalid_story_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) inválidas por proyecto son la cantidad de Historias que fueron juzgadas como inválidas. Los requerimientos inválidos pueden incluir requerimientos duplicados, inviables o que no concuerdan con la estrategia y los objetivos del proyecto. Contar los requerimientos inválidos ayuda al equipo del proyecto a optimizar la gestión de requerimientos y los mecanismos de filtrado para mejorar la validez de los requerimientos y la utilización de recursos. Una cantidad alta de requerimientos inválidos puede requerir mejorar el proceso de recopilación y evaluación de requerimientos.',
    'definition' => "项目中研发需求的个数求和\n关闭原因为重复、不做、设计如此\n过滤已删除的研发需求\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) válidas por proyecto',
    'alias'      => 'Historias válidas',
    'code'       => 'count_of_valid_story_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) válidas por proyecto son la cantidad de Historias confirmadas como válidas. Un requerimiento válido es el que se ajusta a la estrategia y los objetivos del proyecto, puede implementarse y tiene valor para los usuarios. Contar los requerimientos válidos ayuda al equipo del proyecto a evaluar la calidad y la importancia de los requerimientos del proyecto, y a priorizarlos y asignar recursos. Una cantidad alta de requerimientos válidos suele indicar que las funcionalidades y características del proyecto cumplen las expectativas de los usuarios y del mercado, lo que favorece una entrega exitosa del proyecto y la satisfacción de los usuarios.',
    'definition' => "复用：\n按项目统计的无效研发需求数\n按项目统计的研发需求总数\n公式：\n按执行统计的有效研发需求数=按执行统计的研发需求总数-按执行统计的无效研发需求数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de todas las Historias (SR) por proyecto',
    'alias'      => 'Tamaño de todas las Historias (SR)',
    'code'       => 'scale_of_story_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'story',
    'unit'       => 'measure',
    'dateType'   => 'nodate',
    'desc'       => 'El tamaño de todas las Historias (SR) por proyecto indica el tamaño total de las Historias y refleja el tamaño total de las Historias del proyecto; puede usarse para evaluar la gestión del tamaño de las Historias y los resultados del equipo del proyecto.',
    'definition' => "项目中研发需求的规模数求和\n过滤已删除的研发需求\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) completadas por año por proyecto',
    'alias'      => 'Historias completadas',
    'code'       => 'count_of_annual_finished_story_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Las Historias (SR) completadas por año por proyecto son la cantidad de Historias con estado cerrado y motivo de cierre completada en un año. Esta métrica puede reflejar la eficiencia de desarrollo y los resultados del equipo del proyecto en ese año. Un aumento en las Historias completadas indica que el equipo del proyecto logró más resultados de desarrollo y entregables durante ese año.',
    'definition' => "项目中研发需求的个数求和\n关闭时间在某年\n关闭原因为已完成\n过滤已删除的研发需求\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de Historias (SR) completadas por año por proyecto',
    'alias'      => 'Tamaño de historias completadas',
    'code'       => 'scale_of_annual_finished_story_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'story',
    'unit'       => 'measure',
    'dateType'   => 'year',
    'desc'       => 'El tamaño de Historias (SR) completadas por año por proyecto es el tamaño de las Historias con estado cerrado y motivo de cierre completada en un año. Esta métrica puede reflejar la eficiencia de desarrollo y los resultados del equipo del proyecto en ese año. Un aumento en el tamaño de Historias completadas indica que el equipo del proyecto logró más resultados de desarrollo y entregables durante ese año.',
    'definition' => "项目中研发需求的规模数求和\n关闭时间在某年\n关闭原因为已完成\n过滤已删除的研发需求\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de finalización de Historias (SR) por proyecto',
    'alias'      => 'Tasa de finalización de historias',
    'code'       => 'rate_of_finished_story_in_project',
    'purpose'    => 'rate',
    'scope'      => 'project',
    'object'     => 'story',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de finalización de Historias (SR) por proyecto indica la cantidad de Historias completadas por proyecto respecto a las Historias válidas por proyecto. Mide la capacidad del equipo de desarrollo del proyecto para completar requerimientos; cuanto mayor es la tasa de finalización, mayor es la probabilidad de que el equipo pueda entregar los requerimientos a los usuarios y lograr un lanzamiento normal.',
    'definition' => "复用：\n按项目统计的已完成研发需求数\n按项目统计的有效研发需求数\n公式：\n按项目统计的研发需求完成率=按项目统计的已完成研发需求数/按项目统计的有效研发需求数*100%"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de tareas por proyecto',
    'alias'      => 'Total de tareas',
    'code'       => 'count_of_task_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de tareas por proyecto es la cantidad total de tareas que existen actualmente en todo el proyecto. Esta métrica sirve para dar seguimiento a la escala y la complejidad de las tareas, y es la base para la asignación de recursos y el plan de trabajo. Un total grande de tareas puede requerir más recursos y tiempo para completarse, mientras que un total pequeño puede indicar que el proyecto tiene poca carga o que avanza bien.',
    'definition' => "项目中所有的任务个数求和\n过滤已删除的任务\n过滤已删除执行的任务\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas sin iniciar por proyecto',
    'alias'      => 'Tareas sin iniciar',
    'code'       => 'count_of_wait_task_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas sin iniciar por proyecto son la cantidad de tareas que no han comenzado durante la ejecución del proyecto. Esta métrica ayuda al equipo a conocer una parte del avance del proyecto, es decir, cuántas tareas no se han iniciado. Al contar las tareas sin iniciar, el equipo puede evaluar el estado de preparación del proyecto, la asignación de recursos y los posibles factores de retraso.',
    'definition' => "项目中任务个数求和\n状态为未开始\n过滤已删除的任务\n过滤已删除执行的任务\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas en curso por proyecto',
    'alias'      => 'Tareas en curso',
    'code'       => 'count_of_doing_task_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas en curso por proyecto son la cantidad de tareas que se están realizando durante la ejecución del proyecto. Esta métrica ayuda al equipo a conocer la carga de trabajo actual y el avance del proyecto. Contar las tareas en curso ayuda al equipo a juzgar si la carga de trabajo del proyecto está bien distribuida y a planificar y ajustar los recursos.',
    'definition' => "项目中任务个数求和\n状态为进行中\n过滤已删除的任务\n过滤已删除执行的任务\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas completadas por proyecto',
    'alias'      => 'Tareas completadas',
    'code'       => 'count_of_finished_task_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas completadas por proyecto son la cantidad total de tareas que el proyecto ya completó. Esta métrica permite medir el avance y la eficiencia en la finalización de tareas, así como la calidad del trabajo y la producción del proyecto. Un total alto de tareas completadas puede indicar que el proyecto muestra una buena capacidad de entrega.',
    'definition' => "项目中任务个数求和\n状态为已完成或者状态为已关闭且关闭原因为已完成\n过滤已删除的任务\n过滤已删除执行的任务\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas de trabajo estimadas de tareas por proyecto',
    'alias'      => 'Horas estimadas de tareas',
    'code'       => 'estimate_of_task_in_project',
    'purpose'    => 'hour',
    'scope'      => 'project',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas de trabajo estimadas de tareas por proyecto son la métrica que cuenta y suma las horas estimadas de todas las tareas en la gestión de proyectos. Esta métrica se usa para evaluar la carga de trabajo y las necesidades de recursos del proyecto, y ayuda a planificar y organizar al equipo del proyecto. Las horas estimadas de tareas se obtienen acumulando la estimación de carga de trabajo de cada tarea y pueden servir de base para el plan del proyecto y el control del avance.',
    'definition' => "项目中任务的预计工时数求和\n过滤已删除的任务\n过滤父任务\n过滤已删除执行的任务\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas de trabajo consumidas de tareas por proyecto',
    'alias'      => 'Horas consumidas de tareas',
    'code'       => 'consume_of_task_in_project',
    'purpose'    => 'hour',
    'scope'      => 'project',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas de trabajo consumidas de tareas por proyecto son la suma de las horas ya invertidas para completar todas las tareas. Esta métrica sirve para evaluar la inversión de horas del proyecto durante la ejecución de las tareas, así como la eficiencia y el uso de recursos para completarlas. Un total alto de horas consumidas puede indicar que es necesario revisar los flujos de trabajo y la asignación de recursos para mejorar la eficiencia.',
    'definition' => "项目中任务的消耗工时数求和\n过滤已删除的任务\n过滤父任务\n过滤已删除执行的任务\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas de trabajo restantes de tareas por proyecto',
    'alias'      => 'Horas restantes de tareas',
    'code'       => 'left_of_task_in_project',
    'purpose'    => 'hour',
    'scope'      => 'project',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas de trabajo restantes de tareas por proyecto son la suma de las horas aún no consumidas para completar todas las tareas. Esta métrica sirve para evaluar la carga de trabajo y el tiempo restantes del proyecto durante la ejecución de las tareas, así como los recursos y el plan necesarios para completarlas. Un total pequeño de horas restantes puede indicar que el proyecto completará las tareas a tiempo, mientras que un total grande puede requerir reevaluar el avance y la asignación de recursos.',
    'definition' => "项目中任务的剩余工时数求和\n过滤已删除的任务\n过滤父任务\n过滤已删除执行的任务\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas estimadas del trabajo de tareas completadas hasta esta semana (EV) por proyecto en cascada',
    'alias'      => 'Horas estimadas del trabajo de tareas completadas hasta esta semana',
    'code'       => 'ev_of_weekly_finished_task_in_waterfall',
    'purpose'    => 'hour',
    'scope'      => 'project',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'week',
    'desc'       => 'Las horas estimadas del trabajo de tareas completadas hasta esta semana por proyecto en cascada son, en el método de gestión de proyectos en cascada, las horas estimadas de las tareas que ya se completaron. Esta métrica se usa para evaluar la coherencia entre el avance del proyecto y lo realmente completado. Cuanto mayor es el valor de EV, mejor desempeño tiene el equipo del proyecto en la carga de trabajo completada según lo planificado.',
    'definition' => "Reutiliza: Tarea progreso por proyecto, Horas de trabajo estimadas de tareas por proyecto; fórmula: Horas estimadas del trabajo de tareas completadas por proyecto (EV) = Horas de trabajo estimadas de tareas por proyecto * Progreso de tareas por proyecto; se requiere que el proyecto sea en cascada, excluyendo las tareas padre, las tareas con horas consumidas igual a 0, las tareas eliminadas, las tareas canceladas, las tareas de ejecuciones eliminadas y los proyectos eliminados."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas de trabajo planificadas de tareas hasta esta semana (PV) por proyecto en cascada',
    'alias'      => 'Horas de trabajo planificadas de tareas hasta esta semana (PV)',
    'code'       => 'pv_of_weekly_task_in_waterfall',
    'purpose'    => 'hour',
    'scope'      => 'project',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'week',
    'desc'       => 'Las horas de trabajo planificadas de tareas por semana por proyecto en cascada son, en el método de gestión de proyectos en cascada, el total de horas estimadas de las tareas que según el plan deben completarse. Esta métrica se usa para evaluar la carga de trabajo esperada de las tareas de cada semana y puede compararse con las horas realmente gastadas y las horas estimadas de las tareas completadas.',
    'definition' => "1.任务截至日期小于等于本周结束日期，累加预计工时。\n2.任务预计开始日期小于或等于本周结束日期，预计截至日期大于本周结束日期，累加预计工时=(任务的预计工时÷任务工期天数)x 任务预计开始到本周结束日期的天数。\n条件：过滤父任务，过滤已删除的任务，过滤已取消的任务，过滤已删除的执行的任务，过滤已删除的项目；任务未填写预计开始日期时默认取任务所属阶段的计划开始日期；任务未填写预计截至日期，预计截至日期默认取任务所属阶段的计划完成日期，时间只计算后台维护的工作日。"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Progreso de tareas por proyecto',
    'alias'      => 'Progreso de tareas',
    'code'       => 'progress_of_task_in_project',
    'purpose'    => 'rate',
    'scope'      => 'project',
    'object'     => 'task',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'El progreso de tareas por proyecto es la razón entre las horas consumidas por el equipo del proyecto y la suma de las horas consumidas y restantes. Esta métrica refleja la exactitud del avance del proyecto y la eficiencia de ejecución de las tareas.',
    'definition' => "复用：\n按项目统计的任务消耗工时数\n按项目统计的任务剩余工时数\n公式：\n按项目统计的任务进度=按项目统计的任务消耗工时数/（按项目统计的任务消耗工时数+按项目统计的任务剩余工时数）"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de desviación del avance hasta esta semana por proyecto en cascada',
    'alias'      => 'Tasa de desviación del avance',
    'code'       => 'sv_weekly_in_waterfall',
    'purpose'    => 'rate',
    'scope'      => 'project',
    'object'     => 'task',
    'unit'       => 'percentage',
    'dateType'   => 'week',
    'desc'       => 'La tasa de desviación del avance hasta esta semana por proyecto en cascada se usa para medir la diferencia entre el avance del proyecto hasta esta semana y el avance planificado. Evalúa el progreso del proyecto calculando la diferencia entre la carga de trabajo completada y la carga de trabajo planificada.',
    'definition' => "Reutiliza: Horas estimadas del trabajo de tareas completadas hasta esta semana (EV) por proyecto en cascada, Horas de trabajo planificadas de tareas hasta esta semana (PV) por proyecto en cascada; fórmula: Tasa de desviación del avance hasta esta semana por proyecto en cascada = (EV-PV)/PV*100%"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de desviación de costos hasta esta semana por proyecto en cascada',
    'alias'      => 'Tasa de desviación de costos',
    'code'       => 'cv_weekly_in_waterfall',
    'purpose'    => 'rate',
    'scope'      => 'project',
    'object'     => 'task',
    'unit'       => 'percentage',
    'dateType'   => 'week',
    'desc'       => 'La tasa de desviación de costos hasta esta semana por proyecto en cascada se usa para medir la diferencia entre el costo real y el costo planificado del proyecto. Evalúa el desempeño de costos del proyecto calculando la diferencia entre el costo ya gastado y el costo estimado.',
    'definition' => "Reutiliza: Horas estimadas del trabajo de tareas completadas hasta esta semana por proyecto en cascada, Horas de trabajo realmente gastadas hasta esta semana (AC) por proyecto en cascada; fórmula: Tasa de desviación de costos hasta esta semana por proyecto en cascada = (EV-AC)/AC*100%"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de Bugs por proyecto',
    'alias'      => 'Total de Bugs',
    'code'       => 'count_of_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de Bugs por proyecto es la cantidad de todos los Bugs encontrados en el proyecto. Esta métrica refleja la situación general de calidad de Bugs del proyecto. Un total alto de Bugs puede indicar problemas en la calidad del código del proyecto, que requieren mayor resolución y mejora.',
    'definition' => "项目中Bug个数求和\n过滤已删除的Bug\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs activos por proyecto',
    'alias'      => 'Bugs activos',
    'code'       => 'count_of_activated_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs activos por proyecto son la cantidad de Bugs no resueltos actualmente. Esta métrica refleja la cantidad de problemas pendientes de resolver que existen actualmente en el proyecto. Un total alto de Bugs activos puede indicar una menor estabilidad del proyecto, por lo que se debe reforzar la velocidad y la calidad de la resolución de Bugs.',
    'definition' => "项目中Bug个数求和\n状态为激活\n过滤已删除的Bug\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs cerrados por proyecto',
    'alias'      => 'Bugs cerrados',
    'code'       => 'count_of_closed_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de Bugs cerrados por proyecto es la cantidad de Bugs que ya fueron cerrados. Esta métrica refleja la cantidad de defectos ya cerrados en el proyecto. Un aumento en el total de Bugs cerrados indica que el proyecto realizó un trabajo continuo de mejora y corrección.',
    'definition' => "项目中Bug个数求和\n状态为已关闭\n过滤已删除的Bug\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de personas por proyecto',
    'alias'      => 'Total de personas',
    'code'       => 'count_of_user_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'user',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de personas por proyecto es la cantidad de todas las personas que participan en el proyecto. Esta métrica se usa para conocer la escala y la composición del equipo del proyecto, y cumple un papel importante en la asignación y gestión de los recursos del proyecto.',
    'definition' => "项目中团队成员个数求和\n过滤已移除的人员\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Todas las horas de trabajo consumidas en el proyecto por proyecto',
    'alias'      => 'Todas las horas de trabajo consumidas',
    'code'       => 'consume_of_all_in_project',
    'purpose'    => 'hour',
    'scope'      => 'project',
    'object'     => 'effort',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Todas las horas de trabajo consumidas en el proyecto por proyecto son el total de horas que el proyecto realmente gastó. Esta métrica puede usarse para evaluar la inversión de horas del proyecto y la eficiencia en el uso de recursos. Un número alto de horas consumidas puede requerir revisar los flujos de trabajo y la asignación de recursos para mejorar la eficiencia y el control del avance.',
    'definition' => "项目中所有日志记录的工时之和\n记录时间在某年\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Días-persona invertidos por proyecto',
    'alias'      => 'Días-persona invertidos',
    'code'       => 'day_of_invested_in_project',
    'purpose'    => 'hour',
    'scope'      => 'project',
    'object'     => 'effort',
    'unit'       => 'manday',
    'dateType'   => 'nodate',
    'desc'       => 'Los días-persona invertidos por proyecto son el total de días de trabajo que el proyecto ha invertido. Esta métrica puede usarse para evaluar la inversión de recursos humanos del proyecto. Un aumento en el total de días-persona invertidos puede indicar un incremento en el tiempo de trabajo y los recursos invertidos en el proyecto.',
    'definition' => "复用：\n按项目统计的日志记录的工时总数\n公式：\n按项目统计的已投入人天=按项目统计的项目内所有消耗工时数/后台配置的每日可用工时"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas de trabajo realmente gastadas hasta esta semana (AC) por proyecto en cascada',
    'alias'      => 'Horas de trabajo realmente gastadas hasta esta semana en proyectos en cascada',
    'code'       => 'ac_of_weekly_all_in_waterfall',
    'purpose'    => 'hour',
    'scope'      => 'project',
    'object'     => 'effort',
    'unit'       => 'hour',
    'dateType'   => 'week',
    'desc'       => 'Las horas de trabajo realmente gastadas hasta esta semana por proyecto en cascada son, en el método de gestión de proyectos en cascada, el total de horas realmente gastadas hasta esta semana. Esta métrica se usa para evaluar la diferencia entre la carga de trabajo real y la estimada, y ayuda a estimar el avance real del proyecto. Cuanto más se acerca el valor de AC al de EV, mejor desempeño tiene el equipo del proyecto en la ejecución de las tareas.',
    'definition' => "Suma de las horas de trabajo registradas en todos los registros antes del fin de esta semana en proyectos en cascada, excluyendo los proyectos eliminados."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Riesgos abiertos por proyecto',
    'alias'      => 'Riesgos abiertos',
    'code'       => 'count_of_opened_risk_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'risk',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los riesgos abiertos por proyecto son la cantidad de riesgos del proyecto a los que se les está dando seguimiento y gestión en la gestión de proyectos. Un riesgo es un evento o situación incierta potencial del proyecto que puede tener un efecto negativo en el logro de los objetivos del proyecto. Al dar seguimiento y gestionar los riesgos del proyecto, el equipo puede tomar medidas oportunas para reducir la probabilidad y el grado de impacto de los riesgos.',
    'definition' => "项目中风险的个数求和\n状态为开放\n过滤已删除的风险\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Incidencias abiertas por proyecto',
    'alias'      => 'Incidencias abiertas',
    'code'       => 'count_of_opened_issue_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'issue',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las incidencias abiertas por proyecto son la cantidad de incidencias del proyecto a las que se les está dando seguimiento y resolución en la gestión de proyectos. Una incidencia es un obstáculo, una dificultad o un asunto por resolver que se encuentra durante la ejecución del proyecto. Al dar seguimiento y resolver las incidencias del proyecto se puede evitar su acumulación y su efecto sobre los objetivos del proyecto.',
    'definition' => "项目中问题的个数求和\n状态为开放\n过滤已删除的问题\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de Historias (SR) por ejecución',
    'alias'      => 'Total de historias',
    'code'       => 'count_of_story_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de Historias (SR) por ejecución es la cantidad de todas las Historias creadas y vinculadas en la ejecución. Esta métrica refleja la escala y la complejidad de la ejecución y sirve de referencia para el plan de ejecución y la asignación de recursos.',
    'definition' => "执行中研发需求个数求和\n过滤已删除的研发需求\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) completadas por ejecución',
    'alias'      => 'Historias completadas',
    'code'       => 'count_of_finished_story_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) completadas por ejecución son la cantidad de Historias con estado cerrado y motivo de cierre completada. Esta métrica puede reflejar el avance y la capacidad de entrega del equipo de la ejecución durante el desarrollo. Cuantas más Historias completadas, más resultados de desarrollo logró el equipo de la ejecución en ese período.',
    'definition' => "执行中研发需求的个数求和\n状态为已关闭\n关闭原因为已完成\n过滤已删除的研发需求\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) inválidas por ejecución',
    'alias'      => 'Historias inválidas',
    'code'       => 'count_of_invalid_story_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) inválidas por ejecución son la cantidad de Historias que fueron juzgadas como inválidas. Los requerimientos inválidos pueden incluir requerimientos duplicados, inviables o que no concuerdan con la estrategia y los objetivos del proyecto. Contar los requerimientos inválidos ayuda al equipo de la ejecución a optimizar la gestión de requerimientos y los mecanismos de filtrado para mejorar la validez de los requerimientos y la utilización de recursos. Una cantidad alta de requerimientos inválidos puede requerir mejorar el proceso de recopilación y evaluación de requerimientos.',
    'definition' => "执行中研发需求的个数求和\n关闭原因为重复、不做、设计如此和已取消\n过滤已删除的研发需求\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) válidas por ejecución',
    'alias'      => 'Historias válidas',
    'code'       => 'count_of_valid_story_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) válidas por ejecución son la cantidad de Historias confirmadas como válidas. Un requerimiento válido es el que se ajusta a la estrategia y los objetivos del proyecto, puede implementarse y tiene valor para los usuarios. Contar los requerimientos válidos ayuda al equipo de la ejecución a evaluar la calidad y la importancia de los requerimientos del proyecto, y a priorizarlos y asignar recursos. Una cantidad alta de requerimientos válidos suele indicar que las funcionalidades y características de la ejecución cumplen las expectativas de los usuarios y del mercado, lo que favorece una entrega exitosa del proyecto y la satisfacción de los usuarios.',
    'definition' => "复用：\n按执行统计的无效研发需求数\n按执行统计的研发需求总数\n公式：\n按执行统计的有效研发需求数=按执行统计的研发需求总数-按执行统计的无效研发需求数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) con desarrollo completado por ejecución',
    'alias'      => 'Historias (SR) con desarrollo completado',
    'code'       => 'count_of_developed_story_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) con desarrollo completado por ejecución son la cantidad de Historias cuyo desarrollo se completó en la ejecución. Esta métrica puede reflejar el avance de la ejecución. Cuantas más Historias con desarrollo completado, más resultados de desarrollo logró el equipo de la ejecución en ese período.',
    'definition' => "执行中所处阶段为研发完毕、测试中、测试完毕、已验收、已发布和关闭原因为已完成的研发需求个数求和\n过滤已删除的研发需求\n过滤已删除产品的研发需求\n过滤已删除的执行"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de finalización de Historias (SR) por ejecución',
    'alias'      => 'Tasa de finalización de historias',
    'code'       => 'rate_of_finished_story_in_execution',
    'purpose'    => 'rate',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de finalización de Historias (SR) por ejecución indica la cantidad de Historias completadas por ejecución respecto a las Historias válidas por ejecución. Esta métrica mide la capacidad del equipo de desarrollo de la ejecución para completar requerimientos.',
    'definition' => "复用：\n按执行统计的已完成研发需求数\n按执行统计的有效研发需求数\n公式：\n按执行统计的研发需求完成率=按执行统计的已完成研发需求数/按执行统计的有效研发需求数*100%"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proporción de Historias (SR) con desarrollo completado por ejecución',
    'alias'      => 'Proporción de Historias (SR) con desarrollo completado',
    'code'       => 'rate_of_developed_story_in_execution',
    'purpose'    => 'rate',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La proporción de Historias (SR) con desarrollo completado por ejecución indica la proporción del tamaño de las Historias con desarrollo completado por ejecución respecto al total de Historias por producto. Esta métrica mide la cantidad de requerimientos que el equipo de desarrollo completa en la ejecución, permite medir el avance del desarrollo del equipo y ayuda a organizar mejor los recursos de desarrollo.',
    'definition' => "复用：\n按执行统计的研发完成的研发需求数\n按执行统计的研发需求总数\n公式：\n按执行统计的研发完成需求占比=按执行统计的研发完成的研发需求数/按执行统计的研发需求总数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) con aceptación aprobada al cerrar la ejecución por ejecución',
    'alias'      => 'Historias (SR) con aceptación aprobada al cerrar la ejecución',
    'code'       => 'count_of_verified_story_in_execution_when_closing',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) con aceptación aprobada al cerrar la ejecución por ejecución indican la cantidad de Historias cuya etapa al cerrar la ejecución es aceptada, lanzada, o cuyo estado es cerrado con motivo de cierre completada. Esta métrica refleja la cantidad de Historias que pueden ser aprobadas en la aceptación al cerrar la ejecución y puede usarse para evaluar la eficiencia y la calidad de desarrollo del equipo de la ejecución.',
    'definition' => "Al cerrar la ejecución, suma de la cantidad de Historias de la ejecución que cumplen las siguientes condiciones: la etapa es aceptada, lanzada, o el motivo de cierre es completada; se excluyen las Historias eliminadas, las ejecuciones eliminadas, los proyectos eliminados y los productos eliminados."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Carga planificada de Historias (SR) por ejecución',
    'alias'      => 'Carga planificada de la ejecución',
    'code'       => 'workload_of_plan_in_execution',
    'purpose'    => 'qc',
    'scope'      => 'execution',
    'object'     => 'execution',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La carga planificada de Historias (SR) por ejecución es la razón entre el tamaño de los requerimientos planificados al inicio de la ejecución y las horas disponibles de los desarrolladores de la ejecución. Esta métrica refleja la carga de trabajo del equipo y puede ayudarle a distribuir recursos y planificar requerimientos.',
    'definition' => "Reutiliza: Tamaño de Historias (SR) al día de inicio de la ejecución por ejecución, Horas disponibles de los desarrolladores por ejecución; fórmula: Tamaño de Historias (SR) al día de inicio de la ejecución por ejecución / Horas disponibles de los desarrolladores por ejecución"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Densidad de defectos de prueba al cerrar la ejecución por ejecución',
    'alias'      => 'Densidad de defectos de prueba al cerrar la ejecución',
    'code'       => 'test_concentration_in_execution_when_closing',
    'purpose'    => 'qc',
    'scope'      => 'execution',
    'object'     => 'execution',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La densidad de defectos de prueba de la ejecución por ejecución es la razón entre la cantidad de Bugs válidos generados por la ejecución y la cantidad de Historias entregadas por la ejecución. Esta métrica refleja la calidad de las Historias que entrega el equipo y puede ayudarle a identificar posibles problemas en el desarrollo.',
    'definition' => "Reutiliza: Tamaño de Historias (SR) entregadas al cerrar la ejecución por ejecución, Bugs válidos nuevos por ejecución; fórmula: Bugs válidos nuevos por ejecución / Tamaño de Historias (SR) entregadas al cerrar la ejecución por ejecución"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de aprobación de aceptación de la ejecución al cerrarla por ejecución',
    'alias'      => 'Tasa de aprobación de aceptación de la ejecución',
    'code'       => 'rate_of_verified_story_in_execution_when_closing',
    'purpose'    => 'qc',
    'scope'      => 'execution',
    'object'     => 'execution',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de aprobación de aceptación de la ejecución por ejecución es la razón entre la cantidad de requerimientos aprobados en la aceptación al cerrar la ejecución y todos los requerimientos de la ejecución. Esta métrica refleja si los requerimientos completados cumplen los criterios de aceptación y puede ayudar al equipo a identificar posibles problemas de calidad del desarrollo.',
    'definition' => "Reutiliza: Historias (SR) con aceptación aprobada al cerrar la ejecución por ejecución, Historias (SR) válidas por ejecución; fórmula: Historias (SR) con aceptación aprobada al cerrar la ejecución por ejecución / Historias (SR) válidas por ejecución"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de tareas por ejecución',
    'alias'      => 'Total de tareas',
    'code'       => 'count_of_task_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de tareas por ejecución es la cantidad total de tareas que existen actualmente en toda la ejecución. Esta métrica sirve para dar seguimiento a la escala y la complejidad de las tareas, es la base para la asignación de recursos y el plan de trabajo, y puede ayudar al equipo a evaluar la carga de trabajo y lo razonable de la asignación de tareas.',
    'definition' => "执行中所有的任务个数求和\n过滤已删除的任务\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas completadas por ejecución',
    'alias'      => 'Tareas completadas',
    'code'       => 'count_of_finished_task_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas completadas por ejecución son la cantidad total de tareas que la ejecución ya completó. Esta métrica permite medir el avance y la eficiencia en la finalización de tareas, así como la calidad del trabajo y la producción del proyecto. Un total alto de tareas completadas puede indicar que el proyecto muestra una buena capacidad de entrega.',
    'definition' => "执行中任务个数求和\n状态为已完成或者状态为已关闭且关闭原因为已完成\n过滤已删除的任务\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas sin completar por ejecución',
    'alias'      => 'Tareas sin completar',
    'code'       => 'count_of_unfinished_task_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas sin completar por ejecución son la cantidad total de tareas que la ejecución no ha completado. Esta métrica refleja la carga de trabajo pendiente del equipo y la presión de trabajo futura. Un total bajo de tareas sin completar puede indicar que el proyecto muestra una buena capacidad de entrega.',
    'definition' => "复用：\n按执行统计的未完成任务数\n按执行统计的任务总数\n公式：\n按执行统计的未完成任务数=按执行统计的任务总数-按执行统计的已完成任务数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas completadas por día por ejecución',
    'alias'      => 'Tareas completadas',
    'code'       => 'count_of_daily_finished_task_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Las tareas completadas por día por ejecución son la cantidad de tareas completadas cada día. Esta métrica refleja la eficiencia de trabajo diaria del equipo y la velocidad de finalización de tareas.',
    'definition' => "执行中任务个数求和\n状态为已完成\n实际完成日期为某日\n过滤已删除的任务\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas de prueba por ejecución',
    'alias'      => 'Tareas de prueba',
    'code'       => 'count_of_test_task_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas de prueba por ejecución son la suma de las tareas de la ejecución cuyo tipo de tarea es prueba. Esta métrica refleja la carga de trabajo de pruebas en la ejecución y puede ayudar al equipo a distribuir los recursos de prueba.',
    'definition' => "Suma de la cantidad de tareas de la ejecución que cumplen las siguientes condiciones: el tipo de tarea es prueba; se excluyen las tareas eliminadas, las ejecuciones eliminadas y los proyectos eliminados."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas de prueba al día de inicio de la ejecución por ejecución',
    'alias'      => 'Tareas de prueba al día de inicio de la ejecución',
    'code'       => 'count_of_test_task_in_execution_when_starting',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas de prueba al día de inicio de la ejecución por ejecución indican la cantidad de tareas de prueba ya creadas al inicio de la ejecución. Esta métrica refleja la cantidad de tareas de prueba que se planea completar en esta ejecución y puede usarse para evaluar la carga de trabajo de los probadores del equipo de la ejecución.',
    'definition' => "Suma de la cantidad de tareas hasta las 23:59 del día de inicio de la ejecución, con tipo de tarea prueba; se excluyen las tareas eliminadas, las tareas canceladas, las ejecuciones eliminadas y los proyectos eliminados."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas de prueba completadas al cerrar la ejecución por ejecución',
    'alias'      => 'Tareas de prueba completadas al cerrar la ejecución',
    'code'       => 'count_of_finished_test_task_in_execution_when_closing',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas de prueba completadas al cerrar la ejecución por ejecución indican la suma de las tareas de prueba cuyo estado es completada al cerrar la ejecución. Esta métrica refleja la cantidad de tareas de prueba que los probadores completaron al cerrar la ejecución y permite evaluar la carga de trabajo real y la eficiencia de pruebas de los probadores en la ejecución.',
    'definition' => "Al cerrar la ejecución, suma de la cantidad de tareas de prueba de la ejecución que cumplen las siguientes condiciones: el tipo de tarea es prueba, el estado es completada, o cerrada con motivo de cierre completada; se excluyen las tareas eliminadas, las ejecuciones eliminadas y los proyectos eliminados."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas de trabajo restantes de tareas por ejecución',
    'alias'      => 'Horas restantes de tareas',
    'code'       => 'left_of_task_in_execution',
    'purpose'    => 'hour',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas de trabajo restantes de tareas por ejecución son la suma de las horas aún no consumidas para completar todas las tareas. Esta métrica refleja la carga de trabajo restante para completar las tareas y puede ayudar al equipo a predecir el tiempo de finalización y las necesidades de recursos.',
    'definition' => "执行中任务的剩余工时数求和\n过滤已删除的任务\n过滤父任务\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas de trabajo estimadas de tareas por ejecución',
    'alias'      => 'Horas estimadas de tareas',
    'code'       => 'estimate_of_task_in_execution',
    'purpose'    => 'hour',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas de trabajo estimadas de tareas por ejecución son la métrica que cuenta y suma las horas estimadas de todas las tareas en la gestión de la ejecución. Esta métrica refleja la complejidad estimada de las tareas y los recursos necesarios, y puede ayudar a los gerentes del equipo a evaluar la dificultad de las tareas y organizar los recursos.',
    'definition' => "执行中任务的预计工时数求和\n过滤已删除的任务\n过滤父任务\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas de trabajo consumidas de tareas por ejecución',
    'alias'      => 'Horas consumidas de tareas',
    'code'       => 'consume_of_task_in_execution',
    'purpose'    => 'hour',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas de trabajo consumidas de tareas por ejecución son la suma de las horas ya invertidas para completar todas las tareas. Esta métrica refleja la situación real de finalización de las tareas y el uso de recursos, y puede ayudar al equipo a conocer el avance de las tareas y la eficiencia en el uso de recursos.',
    'definition' => "执行中任务的消耗工时数求和\n过滤已删除的任务\n过滤父任务\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Progreso de tareas por ejecución',
    'alias'      => 'Progreso de tareas',
    'code'       => 'progress_of_task_in_execution',
    'purpose'    => 'rate',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'El progreso de tareas por ejecución es la razón entre las horas consumidas por el equipo de la ejecución y la suma de las horas consumidas y restantes. Esta métrica refleja el avance de ejecución de las tareas y puede ayudar al equipo a evaluar si las tareas avanzan según lo planificado y a hacer los ajustes correspondientes.',
    'definition' => "复用：\n按执行统计的任务消耗工时数\n按执行统计的任务剩余工时数\n公式：\n按执行统计的任务进度=按执行统计的任务消耗工时数/（按执行统计的任务消耗工时数+按执行统计的任务剩余工时数）"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) pendientes de revisión por persona',
    'alias'      => 'Historias (SR) pendientes de revisión',
    'code'       => 'count_of_reviewing_story_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) pendientes de revisión por persona indican la suma de las Historias que cada persona debe revisar. Reflejan la escala de las Historias que cada persona debe revisar. Cuanto mayor es el valor, más tiempo se necesita invertir en revisar requerimientos.',
    'definition' => "所有研发需求个数求和\n评审人为某人\n评审结果为空\n评审状态为评审中\n过滤已删除的需求\n过滤已删除产品的需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) revisadas por día por persona',
    'alias'      => 'Historias (SR) revisadas',
    'code'       => 'count_of_daily_review_story_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Las Historias (SR) revisadas por día por persona indican la suma de las Historias que cada persona revisa cada día. Reflejan la escala de las Historias que cada persona revisa diariamente. Cuanto mayor es el valor, mayor es la carga de trabajo.',
    'definition' => "所有研发需求个数求和\n评审者为某人\n评审时间为某日\n过滤已删除的研发需求\n过滤已删除产品的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias (SR) asignadas por persona',
    'alias'      => 'Historias (SR) asignadas',
    'code'       => 'count_of_pending_story_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las Historias (SR) asignadas por persona indican la suma de las Historias que se asignaron a cada persona; reflejan la escala de las Historias que cada persona debe atender. Cuanto mayor es el valor, más tiempo se necesita invertir en atender las Historias.',
    'definition' => "所有研发需求个数求和\n指派给为某人\n过滤已删除的研发需求\n过滤状态为已关闭的研发需求\n过滤已删除产品下的研发需求\n过滤已删除的无产品项目下的研发需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas completadas por día por persona',
    'alias'      => 'Tareas completadas',
    'code'       => 'count_of_daily_finished_task_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Las tareas completadas por día por persona indican la suma de las tareas que cada persona completa cada día. Reflejan la escala de las tareas que cada persona completa diariamente. Cuanto mayor es el valor, puede indicar mayor eficiencia de trabajo y mayor velocidad de finalización de tareas.',
    'definition' => "Suma de la cantidad de tareas completadas por una persona en un día determinado"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas pendientes por persona',
    'alias'      => 'Tareas pendientes',
    'code'       => 'count_of_assigned_task_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas pendientes por persona indican la suma de las tareas que cada persona tiene pendientes por atender. Reflejan la escala de las tareas que cada persona debe atender. Cuanto mayor es el valor, más tiempo se necesita invertir en atender las tareas.',
    'definition' => "所有任务个数求和\n指派给为某人\n过滤已关闭的任务\n过滤已取消的任务\n过滤已删除的任务\n过滤已删除项目的任务\n过滤已删除执行的任务\n过滤多人任务中某人任务状态为已完成的任务\n过滤任务关联的执行和项目都为挂起状态时的任务"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs resueltos por día por persona',
    'alias'      => 'Bugs resueltos',
    'code'       => 'count_of_daily_fixed_bug_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Los Bugs resueltos por día por persona indican la suma de los Bugs que cada persona resuelve cada día. Reflejan la escala de Bugs que cada persona resuelve diariamente. Cuanto mayor es el valor, puede indicar mayor capacidad de resolución de Bugs y mayor eficiencia de trabajo.',
    'definition' => "所有Bug个数求和\nbug状态为已解决和已关闭\n解决者为某人\n解决日期为某日\n过滤已删除的bug\n过滤已删除产品的bug"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bugs pendientes por persona',
    'alias'      => 'Bugs pendientes',
    'code'       => 'count_of_assigned_bug_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bugs pendientes por persona indican la suma de los Bugs que cada persona tiene pendientes por atender. Reflejan la escala de Bugs que cada persona debe atender. Cuanto mayor es el valor, más tiempo se necesita invertir en resolver Bugs.',
    'definition' => "所有Bug个数求和\n指派给为某人\n过滤已删除的Bug\n过滤已删除产品的Bug"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Casos de prueba pendientes por persona',
    'alias'      => 'Casos de prueba pendientes',
    'code'       => 'count_of_assigned_case_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'case',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los casos de prueba pendientes por persona representan la suma de casos de prueba que cada persona tiene por atender. Refleja la magnitud de casos que debe procesar cada persona. Cuanto mayor sea el valor, más tiempo se necesita invertir en atender los casos de prueba.',
    'definition' => "所有测试单中的用例个数求和（不去重）\n指派给某人\n过滤已删除的用例\n过滤已删除的测试单中的用例\n过滤已关闭的测试单中的用例\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones pendientes por persona',
    'alias'      => 'Retroalimentaciones pendientes',
    'code'       => 'count_of_assigned_feedback_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las retroalimentaciones pendientes por persona representan la suma de retroalimentaciones que cada persona tiene por atender. Refleja la magnitud de retroalimentaciones que debe procesar cada persona. Cuanto mayor sea el valor, más tiempo se necesita invertir en atenderlas.',
    'definition' => "所有反馈个数求和\n指派给为某人\n过滤已删除的反馈\n过滤已删除产品的反馈"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones pendientes de revisión por persona',
    'alias'      => 'Retroalimentaciones pendientes de revisión',
    'code'       => 'count_of_reviewing_feedback_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las retroalimentaciones pendientes de revisión por persona representan la suma de retroalimentaciones que cada persona tiene por revisar. Refleja la magnitud de retroalimentaciones que debe revisar cada persona. Cuanto mayor sea el valor, más tiempo se necesita invertir en revisarlas.',
    'definition' => "所有反馈个数求和\n状态为待评审\n指派给为某人\n过滤已删除的反馈\n过滤已删除产品的反馈"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones revisadas por día por persona',
    'alias'      => 'Retroalimentaciones revisadas',
    'code'       => 'count_of_daily_review_feedback_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Las retroalimentaciones revisadas por día por persona representan la suma de retroalimentaciones que cada persona revisa cada día. Refleja la magnitud de retroalimentaciones revisadas diariamente por cada persona. Cuanto mayor sea el valor, mayor es la carga de trabajo.',
    'definition' => "所有反馈个数求和\n由谁评审为某人\n评审时间为某日\n过滤已删除的反馈\n过滤已删除产品的反馈"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Nuevas retroalimentaciones por semana por producto',
    'alias'      => 'Retroalimentaciones nuevas',
    'code'       => 'count_of_weekly_created_feedback_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'week',
    'desc'       => 'Las nuevas retroalimentaciones por semana por producto son la cantidad de retroalimentaciones de usuarios recopiladas en una semana. Esta métrica ayuda al equipo a comprender la tendencia de desarrollo del producto y los cambios en las necesidades, y a ajustar y optimizar la estrategia del producto',
    'definition' => "产品中创建时间为某个周的反馈的个数求和\n过滤已删除的反馈\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones en proceso por producto',
    'alias'      => 'Retroalimentaciones en proceso',
    'code'       => 'count_of_doing_feedback_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las retroalimentaciones en proceso por producto representan la suma de retroalimentaciones del producto con estado En proceso. Cuanto mayor sea el valor, más retroalimentaciones atiende el equipo en paralelo, lo que ayuda a conocer la carga de trabajo actual',
    'definition' => "产品中所有反馈个数求和\n状态为处理中\n过滤已删除的反馈\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones procesadas por producto',
    'alias'      => 'Retroalimentaciones procesadas',
    'code'       => 'count_of_done_feedback_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las retroalimentaciones procesadas por producto representan la suma de retroalimentaciones del producto con estado Procesada. Cuanto mayor sea el valor, más retroalimentaciones han atendido los miembros del equipo, lo que contribuye a mejorar la satisfacción del usuario',
    'definition' => "产品中所有反馈个数求和\n状态为已处理\n过滤已删除的反馈\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones por completar por producto',
    'alias'      => 'Retroalimentaciones por completar',
    'code'       => 'count_of_clarify_feedback_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las retroalimentaciones por completar por producto representan la suma de retroalimentaciones del producto con estado Por completar. Cuanto mayor sea el valor, más retroalimentaciones tienen información poco clara o compleja. Se requiere que quien las envió aclare y explique más',
    'definition' => "产品中所有反馈个数求和\n状态为待完善\n过滤已删除的反馈\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones pendientes por producto',
    'alias'      => 'Retroalimentaciones pendientes',
    'code'       => 'count_of_wait_feedback_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las retroalimentaciones pendientes por producto representan la suma de retroalimentaciones del producto con estado Pendiente. Esta métrica puede indicar la eficiencia del equipo del producto para atender retroalimentaciones; cuantas más retroalimentaciones pendientes, más puede disminuir la satisfacción del cliente',
    'definition' => "产品中所有反馈个数求和\n状态为待处理\n过滤已删除的反馈\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones en seguimiento por producto',
    'alias'      => 'Retroalimentaciones en seguimiento',
    'code'       => 'count_of_asked_feedback_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las retroalimentaciones en seguimiento por producto representan la suma de retroalimentaciones del producto con estado En seguimiento. Esta métrica puede indicar la complejidad de las retroalimentaciones o dudas sobre la solución; cuantas más retroalimentaciones en seguimiento, más tiempo y recursos puede necesitar el equipo para responder y resolver estos asuntos',
    'definition' => "产品中所有反馈个数求和\n状态为追问中\n过滤已删除的反馈\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Retroalimentaciones sin cerrar por producto',
    'alias'      => 'Retroalimentaciones sin cerrar',
    'code'       => 'count_of_unclosed_feedback_in_product',
    'purpose'    => 'scale',
    'scope'      => 'product',
    'object'     => 'feedback',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las retroalimentaciones sin cerrar por producto representan la suma de retroalimentaciones del producto con estado Sin cerrar. Esta métrica puede reflejar, en cierta medida, la eficiencia del equipo del producto para responder a la retroalimentación de los usuarios y su capacidad para resolver oportunamente sus problemas',
    'definition' => "产品中所有反馈个数求和\n过滤状态为已关闭的反馈\n过滤已删除的反馈\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Requerimientos de usuario cerrados por proyecto',
    'alias'      => 'Requerimientos de usuario cerrados',
    'code'       => 'count_of_closed_requirement_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'requirement',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los requerimientos de usuario cerrados por proyecto son la cantidad de requerimientos de usuario del proyecto con estado Cerrado. Refleja las tareas y planes ya completados por el equipo del proyecto para cumplir las expectativas y necesidades de los usuarios. Un aumento en los requerimientos de usuario cerrados indica que el equipo ha completado con éxito cierta cantidad de trabajo sobre requerimientos de usuario y ha obtenido ciertos resultados.',
    'definition' => "项目中用户需求个数求和\n过滤已删除的用户需求状态为已关闭\n 过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de requerimientos de usuario por proyecto',
    'alias'      => 'Total de Requerimientos de usuario (UR)',
    'code'       => 'count_of_requirement_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'requirement',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de requerimientos de usuario por proyecto es la cantidad de todos los requerimientos de usuario creados o vinculados en el proyecto. Refleja el tamaño y la complejidad del proyecto y aporta información útil sobre la gestión de requerimientos de usuario, el control del avance, la planificación de recursos, la evaluación de riesgos y el control de calidad.',
    'definition' => "项目中用户需求个数求和\n过滤已删除的用户需求\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tickets asignados por persona',
    'alias'      => 'Tickets asignados',
    'code'       => 'count_of_assigned_ticket_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'ticket',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los tickets asignados por persona representan la suma de tickets asignados a cada persona. Refleja la magnitud de tickets que debe atender cada persona; cuanto mayor sea el valor, más tareas de retroalimentación hay por atender',
    'definition' => "所有工单个数求和\n指派给为某人\n过滤已删除的工单\n过滤已删除产品的工单"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'QA asignados por persona',
    'alias'      => 'QA asignados',
    'code'       => 'count_of_assigned_qa_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'qa',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los QA asignados por persona representan la suma de problemas de aseguramiento de calidad asignados a cada persona. Refleja la magnitud de problemas de aseguramiento de calidad que debe atender cada persona. Cuanto mayor sea el valor, más problemas de aseguramiento de calidad hay por atender',
    'definition' => "所有待处理的QA个数求和（包含：待处理质量保证计划、待处理不符合项）\n指派给为某人\n质量保证计划状态为待检查、不符合项状态为待解决\n过滤已删除的质量保证计划和不符合项\n过滤已删除项目的质量保证计划和不符合项"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Riesgos asignados por persona',
    'alias'      => 'Riesgos asignados',
    'code'       => 'count_of_assigned_risk_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'risk',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los riesgos asignados por persona representan la suma de riesgos asignados a cada persona. Refleja la magnitud de riesgos que debe atender cada persona. Cuanto mayor sea el valor, más tiempo se necesita invertir en atender los riesgos',
    'definition' => "所有风险个数求和\n指派给为某人\n过滤已删除的风险\n过滤已关闭的风险\n过滤已删除项目的风险"
);

$reviewissueMetrics = array();
$reviewissueMetrics['name']       = 'Comentarios de revisión asignados por persona';
$reviewissueMetrics['alias']      = 'Comentarios de revisión asignados';
$reviewissueMetrics['code']       = 'count_of_assigned_reviewissue_in_user';
$reviewissueMetrics['purpose']    = 'scale';
$reviewissueMetrics['scope']      = 'user';
$reviewissueMetrics['object']     = 'reviewissue';
$reviewissueMetrics['unit']       = 'count';
$reviewissueMetrics['dateType']   = 'nodate';
$reviewissueMetrics['desc']       = 'Los comentarios de revisión asignados por persona representan la suma de comentarios de revisión asignados a cada persona. Refleja la magnitud de comentarios de revisión que debe atender cada persona. Cuanto mayor sea el valor, más tiempo se necesita invertir en atender los comentarios de revisión';
$reviewissueMetrics['definition'] = "所有评审意见个数求和\n指派给为某人\n过滤已删除的评审意见\n过滤已关闭的评审意见\n过滤已删除项目的评审意见";
$config->bi->builtin->metrics[]   = $reviewissueMetrics;

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Incidencias asignadas por persona',
    'alias'      => 'Incidencias asignadas',
    'code'       => 'count_of_assigned_issue_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'issue',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las incidencias asignadas por persona representan la suma de incidencias que cada persona tiene por atender. Refleja la magnitud de incidencias que debe atender cada persona. Cuanto mayor sea el valor, más incidencias tiene el proyecto y más tiempo se necesita invertir en atenderlas.',
    'definition' => "所有问题个数求和\n指派给为某人\n过滤已删除的问题\n过滤已删除项目的问题"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Requerimientos del pool de requerimientos asignados por persona',
    'alias'      => 'Requerimientos del pool pendientes',
    'code'       => 'count_of_assigned_demand_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'demand',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los requerimientos del pool de requerimientos asignados por persona representan la suma de requerimientos del pool que cada persona tiene por atender. Refleja la magnitud de requerimientos del pool que debe atender cada persona. Cuanto mayor sea el valor, más tiempo se necesita invertir en atender los requerimientos del pool',
    'definition' => "所有需求池需求个数求和\n指派给为某人\n过滤已删除的需求池需求\n过滤状态为已关闭的需求池需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Requerimientos de usuario sin cerrar por proyecto',
    'alias'      => 'Requerimientos de usuario sin cerrar',
    'code'       => 'count_of_unclosed_requirement_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'requirement',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los requerimientos de usuario sin cerrar por proyecto son la cantidad de requerimientos de usuario del proyecto aún no satisfechos o atendidos. Refleja las tareas y planes en curso del equipo del proyecto para cumplir las expectativas y necesidades de los usuarios. Un aumento en los requerimientos de usuario sin cerrar indica que el equipo tiene aún mucho trabajo pendiente sobre requerimientos de usuario, que requiere seguimiento y atención adicionales para asegurar que el proyecto cumpla las expectativas de los usuarios',
    'definition' => "复用：\n按项目统计的用户需求总数\n按项目统计的已关闭用户需求数\n公式：\n按项目统计的未关闭用户需求数=按项目统计的用户需求总数-按项目统计的已关闭用户需求数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Requerimientos de usuario completados por proyecto',
    'alias'      => 'Requerimientos de usuario completados',
    'code'       => 'count_of_finished_requirement_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'requirement',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los requerimientos de usuario completados por proyecto son la cantidad de requerimientos de usuario con estado Cerrado y motivo de cierre Completado. Refleja las tareas y planes ya realizados por el equipo del proyecto para cumplir las expectativas y necesidades de los usuarios. Un aumento en los requerimientos de usuario completados indica que el equipo ha completado con éxito cierta cantidad de trabajo sobre requerimientos de usuario y ha obtenido ciertos resultados',
    'definition' => "项目中用户需求的个数求和\n状态为已关闭\n关闭原因为已完成\n过滤已删除的用户需求\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Épicas asignadas por persona',
    'alias'      => 'Épicas asignadas',
    'code'       => 'count_of_assigned_epic_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'epic',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las épicas asignadas por persona representan la suma de épicas que cada persona tiene por atender. Refleja la magnitud de épicas que debe atender cada persona. Cuanto mayor sea el valor, más tiempo se necesita invertir en atender las épicas.',
    'definition' => "所有业务需求个数求和\n指派给为某人\n过滤已删除的业务需求\n过滤已删除产品的业务需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Requerimientos de usuario asignados por persona',
    'alias'      => 'Requerimientos de usuario asignados',
    'code'       => 'count_of_assigned_requirement_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'requirement',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los requerimientos de usuario asignados por persona representan la suma de requerimientos de usuario que cada persona tiene por atender. Refleja la magnitud de requerimientos de usuario que debe atender cada persona. Cuanto mayor sea el valor, más tiempo se necesita invertir en atender los requerimientos de usuario.',
    'definition' => "所有用户需求个数求和\n指派给为某人\n过滤已删除的用户需求\n过滤已删除产品的用户需求"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de épicas por proyecto',
    'alias'      => 'Total de épicas',
    'code'       => 'count_of_epic_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'epic',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de épicas por proyecto es la cantidad de todas las épicas creadas o vinculadas en el proyecto. Refleja el tamaño y la complejidad del proyecto y aporta información útil sobre la gestión de épicas, el control del avance, la planificación de recursos, la evaluación de riesgos y el control de calidad',
    'definition' => "项目中业务需求个数求和\r\n过滤已删除的业务需求\r\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Épicas cerradas por proyecto',
    'alias'      => 'Épicas cerradas',
    'code'       => 'count_of_closed_epic_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'epic',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las épicas cerradas por proyecto son la cantidad de épicas del proyecto con estado Cerrado. Refleja las tareas y planes ya realizados por el equipo del proyecto para cumplir los objetivos y necesidades de negocio de la organización. Un aumento en las épicas cerradas indica que el equipo ha completado con éxito cierta cantidad de trabajo sobre épicas y ha obtenido ciertos resultados.',
    'definition' => "项目中业务需求个数求和\r\n过滤已删除的业务需求\r\n状态为已关闭\r\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Épicas sin cerrar por proyecto',
    'alias'      => 'Épicas sin cerrar',
    'code'       => 'count_of_unclosed_epic_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'epic',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las épicas sin cerrar por proyecto son la cantidad de épicas del proyecto aún no satisfechas o atendidas. Refleja las tareas y planes en curso del equipo del proyecto para cumplir los objetivos y necesidades de negocio de la organización. Un aumento en las épicas sin cerrar indica que el equipo tiene aún mucho trabajo pendiente sobre épicas, que requiere seguimiento y atención adicionales para asegurar que el proyecto cumpla los objetivos de negocio de la organización',
    'definition' => "复用：\r\n按项目统计的业务需求总数\r\n按项目统计的已关闭业务需求数\r\n公式：\r\n按项目统计的未关闭业务需求数=按项目统计的业务需求总数-按项目统计的已关闭业务需求数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Épicas completadas por proyecto',
    'alias'      => 'Épicas completadas',
    'code'       => 'count_of_finished_epic_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'epic',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las épicas completadas por proyecto son la cantidad de épicas con estado Cerrado y motivo de cierre Completado. Refleja las tareas y planes ya realizados por el equipo del proyecto para cumplir los objetivos y necesidades de negocio de la organización. Un aumento en las épicas completadas indica que el equipo ha completado con éxito cierta cantidad de trabajo sobre épicas y ha obtenido ciertos resultados',
    'definition' => "项目中业务需求的个数求和\r\n状态为已关闭\r\n关闭原因为已完成\r\n过滤已删除的业务需求\r\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'QA asignados por persona',
    'alias'      => 'QA asignados',
    'code'       => 'count_of_assigned_qa_in_user',
    'purpose'    => 'scale',
    'scope'      => 'user',
    'object'     => 'qa',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los QA asignados por persona representan la suma de problemas de aseguramiento de calidad asignados a cada persona. Refleja la magnitud de problemas de aseguramiento de calidad que debe atender cada persona. Cuanto mayor sea el valor, más problemas de aseguramiento de calidad hay por atender',
    'definition' => "所有待处理的QA个数求和（包含：待处理质量保证计划、待处理不符合项）\n指派给为某人\n质量保证计划状态为待检查、不符合项状态为待解决\n过滤已删除的质量保证计划和不符合项\n过滤已删除项目的质量保证计划和不符合项"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias por ejecución',
    'alias'      => 'Tamaño de historias',
    'code'       => 'scale_of_story_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El tamaño de historias por ejecución representa el tamaño total de todas las historias de la ejecución. Esta métrica refleja el volumen de trabajo de desarrollo que el equipo debe realizar durante el ciclo de la ejecución y sirve para evaluar la carga de trabajo del equipo y los resultados del desarrollo.',
    'definition' => "执行中所有研发需求的规模数求和\n过滤已删除的研发需求\n过滤已删除的执行\n过滤已删除的项目\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas consumidas en tareas de prueba por ejecución',
    'alias'      => 'Horas consumidas en tareas de prueba',
    'code'       => 'consume_of_test_task_in_execution',
    'purpose'    => 'hour',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas consumidas en tareas de prueba por ejecución son la suma de horas ya consumidas cuando el tipo de tarea es Prueba. Esta métrica refleja el uso de recursos de las tareas de prueba y ayuda al equipo a conocer el costo de las pruebas de la ejecución.',
    'definition' => "执行中满足以下条件的任务消耗工时数求和\n任务类型为测试\n过滤已删除的任务\n过滤父任务\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas consumidas en tareas de desarrollo por ejecución',
    'alias'      => 'Horas consumidas en tareas de desarrollo',
    'code'       => 'consume_of_devel_task_in_execution',
    'purpose'    => 'hour',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas consumidas en tareas de desarrollo por ejecución son la suma de horas ya consumidas cuando el tipo de tarea es Desarrollo. Esta métrica refleja el uso de recursos de las tareas de desarrollo y ayuda al equipo a conocer el costo de desarrollo de la ejecución.',
    'definition' => "执行中满足以下条件的任务消耗工时数求和\n任务类型为开发\n过滤已删除的任务\n过滤父任务\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas consumidas en tareas originadas en Bug por ejecución',
    'alias'      => 'Horas consumidas en tareas originadas en Bug',
    'code'       => 'consume_of_frombug_task_in_execution',
    'purpose'    => 'hour',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas consumidas en tareas originadas en Bug por ejecución son la suma de horas consumidas por los Bug convertidos en tareas en la ejecución. Esta métrica refleja el uso de recursos de las tareas cuyo origen es un Bug y ayuda al equipo a identificar problemas en la gestión de defectos.',
    'definition' => "执行中满足以下条件的任务消耗工时数求和\n任务来源为Bug\n过滤已删除的任务\n过滤父任务\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Horas disponibles de desarrolladores por ejecución',
    'alias'      => 'Horas disponibles de desarrolladores',
    'code'       => 'hour_of_developer_available_in_execution',
    'purpose'    => 'hour',
    'scope'      => 'execution',
    'object'     => 'user',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'Las horas disponibles de desarrolladores por ejecución son la suma de horas disponibles de los miembros del equipo de la ejecución con rol de desarrollo. Esta métrica refleja el tiempo que los desarrolladores del equipo pueden dedicar a esta iteración y ayuda a calcular la carga de trabajo del equipo de la ejecución.',
    'definition' => "执行团队成员每日可用工时*可用工日\n人员职位为研发\n过滤已删除的用户\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Casos de prueba por ejecución',
    'alias'      => 'Casos de prueba',
    'code'       => 'count_of_case_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'case',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los casos de prueba por ejecución son la suma de casos de prueba de la ejecución y ayudan al equipo a evaluar el nivel de cobertura de pruebas de los requerimientos.',
    'definition' => "执行中满足以下条件的测试用例个数的求和\n执行用例列表中的用例\n过滤已删除的用例\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de nuevos Bug válidos por ejecución',
    'alias'      => 'Total de nuevos Bug válidos',
    'code'       => 'count_of_effective_bug_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de nuevos Bug válidos por ejecución es la cantidad de Bug válidos encontrados en la ejecución. Esta métrica refleja la calidad de la ejecución. Cuantos más nuevos Bug válidos, más problemas puede haber en la calidad del código de la ejecución, que requieren mayor resolución y mejora.',
    'definition' => "执行中新增Bug个数求和\n解决方案为已解决，延期处理和不予解决或状态为激活\n过滤已删除的Bug\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias entregadas al cierre de la ejecución, por ejecución',
    'alias'      => 'Tamaño de historias entregadas al cierre de la ejecución',
    'code'       => 'scale_of_delivered_story_in_execution_when_closing',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'El tamaño de historias entregadas al cierre de la ejecución, por ejecución, representa el tamaño de las historias cuya etapa es Lanzada, o cuyo estado es Cerrado con motivo de cierre Completado, al momento del cierre de la ejecución. Esta métrica refleja el tamaño de las historias que se pueden entregar a los usuarios al cierre de la ejecución y sirve para evaluar la capacidad de entrega del equipo.',
    'definition' => "执行关闭时，满足以下条件的执行中研发需求规模数求和，条件是：所处阶段为已发布或关闭原因为已完成\n过滤已删除的研发需求\n过滤已删除的执行\n过滤已删除的项目\n过滤已删除的产品\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias al día de inicio de la ejecución, por ejecución',
    'alias'      => 'Historias al día de inicio de la ejecución',
    'code'       => 'count_of_story_in_execution_when_starting',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las historias al día de inicio de la ejecución, por ejecución, representan la cantidad de historias ya vinculadas a la ejecución el día en que esta inicia. Esta métrica refleja la cantidad de requerimientos que se planea completar en esta ejecución y sirve para evaluar la carga de trabajo del equipo.',
    'definition' => "截止到执行开始当天的23:59分的研发需求个数求和，过滤已删除的研发需求\n过滤已删除的执行\n过滤已删除的项目\n过滤已删除的产品\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tamaño de historias al día de inicio de la ejecución, por ejecución',
    'alias'      => 'Tamaño de historias al día de inicio de la ejecución',
    'code'       => 'scale_of_story_in_execution_when_starting',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'hour',
    'dateType'   => 'nodate',
    'desc'       => 'El tamaño de historias al día de inicio de la ejecución, por ejecución, representa el tamaño de las historias ya vinculadas a la ejecución al iniciar esta. Esta métrica refleja el tamaño de los requerimientos que se planea completar en esta ejecución y sirve para evaluar la carga de trabajo del equipo.',
    'definition' => "截止到执行开始当天的23:59分的研发需求规模数求和，过滤已删除的研发需求\n过滤已删除的执行\n过滤已删除的项目\n过滤已删除的产品\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Proporción de horas consumidas en tareas originadas en Bug por ejecución',
    'alias'      => 'Proporción de horas consumidas en tareas originadas en Bug',
    'code'       => 'consume_rate_of_frombug_task_in_execution',
    'purpose'    => 'rate',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La proporción de horas consumidas en tareas originadas en Bug por ejecución es la razón entre las horas consumidas por los Bug convertidos en tareas en la ejecución y las horas consumidas por todas las tareas de la ejecución. Esta métrica refleja el uso de recursos de las tareas cuyo origen es un Bug y ayuda al equipo a identificar problemas en la gestión de defectos, por ejemplo, demasiados defectos heredados que hacen que la ejecución se dedique constantemente a saldar deudas antiguas.',
    'definition' => "复用：按执行统计的来源Bug的任务消耗工时数、按执行统计的任务消耗工时数；\n公式：按执行统计的来源Bug的任务消耗工时数/按执行统计的任务消耗工时数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Elementos esperados de casos de prueba por ejecución',
    'alias'      => 'Elementos esperados de casos de prueba',
    'code'       => 'count_of_case_expect_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'case',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los elementos esperados de casos de prueba por ejecución son la suma de los elementos esperados de todos los casos vinculados a la ejecución. Sirven para evaluar el nivel de detalle de los casos de prueba y ayudan al equipo a evaluar la profundidad de las pruebas y la complejidad de los requerimientos.',
    'definition' => "执行中满足以下条件的用例预期条目的求和\n执行下用例列表中的用例数\n过滤已删除的用例\n过滤已删除的执行\n过滤已删除的项目"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Historias entregadas al cierre de la ejecución, por ejecución',
    'alias'      => 'Historias entregadas al cierre de la ejecución',
    'code'       => 'count_of_delivered_story_in_execution_when_closing',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las historias entregadas al cierre de la ejecución, por ejecución, representan la cantidad de historias cuya etapa es Lanzada, o cuyo estado es Cerrado con motivo de cierre Completado, al momento del cierre de la ejecución. Esta métrica refleja la cantidad de historias que se pueden entregar a los usuarios al cierre de la ejecución y sirve para evaluar la capacidad de entrega del equipo.',
    'definition' => "执行关闭时，满足以下条件的执行中研发需求个数求和\n所处阶段为已发布或关闭原因为已完成\n过滤已删除的研发需求\n过滤已删除的执行\n过滤已删除的项目\n过滤已删除的产品"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de cumplimiento del plan de historias al cierre de la ejecución, por ejecución',
    'alias'      => 'Tasa de cumplimiento del plan de historias al cierre de la ejecución',
    'code'       => 'rate_of_planned_developed_story_in_execution_when_closing',
    'purpose'    => 'rate',
    'scope'      => 'execution',
    'object'     => 'execution',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de cumplimiento del plan de historias por ejecución es la razón entre las historias entregadas al cierre de la ejecución y las historias planeadas al inicio de la ejecución. Esta métrica refleja si el equipo puede completar a tiempo los requerimientos planificados y ayuda a identificar posibles problemas en el desarrollo.',
    'definition' => "Reutiliza: historias entregadas al cierre de la ejecución, por ejecución; historias al día de inicio de la ejecución, por ejecución. Fórmula: historias entregadas al cierre de la ejecución, por ejecución / historias al día de inicio de la ejecución, por ejecución"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de finalización de tareas de prueba al cierre de la ejecución, por ejecución',
    'alias'      => 'Tasa de finalización de tareas de prueba al cierre de la ejecución',
    'code'       => 'rate_of_finished_test_task_in_execution_when_closing',
    'purpose'    => 'rate',
    'scope'      => 'execution',
    'object'     => 'execution',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de cumplimiento del plan de tareas de prueba por ejecución es la razón entre las tareas de prueba completadas durante la ejecución y las tareas de prueba planeadas al inicio de la ejecución. Esta métrica refleja si el equipo puede completar a tiempo las tareas de prueba planificadas y ayuda a identificar posibles problemas en la ejecución, por ejemplo, que las pruebas intervengan tarde.',
    'definition' => "复用：按执行统计的执行关闭时已完成的测试任务数、按执行统计的测试任务数\n公式：按执行统计的执行关闭时已完成的测试任务数/按执行统计的测试任务数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Eficiencia de desarrollo al cierre de la ejecución, por ejecución',
    'alias'      => 'Eficiencia de desarrollo de la ejecución',
    'code'       => 'devel_efficiency_in_execution_when_closing',
    'purpose'    => 'rate',
    'scope'      => 'execution',
    'object'     => 'execution',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La eficiencia de desarrollo por ejecución es la razón entre el tamaño de las historias entregadas por la ejecución y las horas consumidas por todas las tareas de la ejecución. Esta métrica refleja la velocidad de desarrollo de la ejecución y ayuda al equipo a identificar posibles problemas y a tomar medidas de mejora para aumentar la eficiencia del desarrollo.',
    'definition' => "复用：按执行统计的任务消耗工时数、按执行统计的执行关闭时已交付的研发需求规模数；\n公式：按执行统计的执行关闭时已交付的研发需求规模数/按执行统计的任务消耗工时数"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bug válidos por proyecto',
    'alias'      => 'Bugs válidos',
    'code'       => 'count_of_effective_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bug válidos por proyecto son la cantidad de Bug del proyecto que realmente tienen impacto y valor. Un Bug válido suele ser aquel que causa un funcionamiento anormal del proyecto o afecta la experiencia del usuario. Contar los Bug válidos ayuda a evaluar la estabilidad y la calidad del proyecto, así como la colaboración entre los testers o su conocimiento del proyecto.',
    'definition' => "项目中所有Bug个数求和,解决方案为已解决、延期处理或状态为激活;\n 过滤已删除的Bug\n 过滤已删除的项目\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bug corregidos por proyecto',
    'alias'      => 'Bugs corregidos',
    'code'       => 'count_of_fixed_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bug corregidos por proyecto son la cantidad de Bug cuya solución es Resuelto y cuyo estado es Cerrado. Esta métrica refleja la cantidad de problemas resueltos por el proyecto. Los Bug corregidos permiten evaluar la eficiencia del equipo de desarrollo en la resolución de Bug.',
    'definition' => "项目中Bug的个数求和\n 解决方案为已解决\n 状态为已关闭\n 过滤已删除的Bug\n 过滤已删除的项目\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Nuevos Bug por día por proyecto',
    'alias'      => 'Bugs nuevos',
    'code'       => 'count_of_daily_created_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Los nuevos Bug por día por proyecto son la cantidad de Bug nuevos descubiertos y registrados cada día durante el desarrollo del proyecto. Esta métrica refleja la velocidad y la tendencia de descubrimiento de Bug durante el desarrollo; una cantidad alta de nuevos Bug puede indicar que hay muchos problemas por resolver y también ayuda a identificar cuellos de botella y posibles riesgos de calidad en el desarrollo del proyecto.',
    'definition' => "项目中Bug数求和\n 创建时间为某日\n 过滤已删除的Bug\n 过滤已删除的项目\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bug resueltos por día por proyecto',
    'alias'      => 'Bugs resueltos',
    'code'       => 'count_of_daily_resolved_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Los Bug resueltos por día por proyecto son la cantidad de Bug que el proyecto resuelve cada día. Esta métrica nos ayuda a conocer la velocidad y la eficiencia del equipo de desarrollo para resolver Bug.',
    'definition' => "项目中Bug数求和\n 解决日期为某日\n 过滤已删除的Bug\n 过滤已删除的项目\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bug cerrados por día por proyecto',
    'alias'      => 'Bugs cerrados',
    'code'       => 'count_of_daily_closed_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'day',
    'desc'       => 'Los Bug cerrados por día por proyecto son la cantidad de Bug que se cierran cada día en el proyecto. Esta métrica nos ayuda a conocer la velocidad y la eficiencia con que el equipo de desarrollo confirma y cierra los Bug resueltos; al comparar la cantidad de Bug cerrados en distintos periodos se puede evaluar la colaboración y la capacidad de manejo de problemas del equipo.',
    'definition' => "项目中Bug数求和\n 关闭时间为某日\n 过滤已删除的Bug\n 过滤已删除的项目\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de corrección de Bug por proyecto',
    'alias'      => 'Tasa de corrección de Bugs',
    'code'       => 'rate_of_fixed_bug_in_project',
    'purpose'    => 'rate',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de corrección de Bug por proyecto es la proporción entre los Bug corregidos por proyecto y los Bug válidos por proyecto. Esta métrica nos ayuda a conocer la eficiencia y la calidad del equipo de desarrollo en la corrección de Bug; una tasa alta puede indicar que los Bug se resuelven oportunamente y que la calidad del proyecto está bien protegida.',
    'definition' => "复用：按项目统计的修复Bug数、按项目统计的有效Bug数\n 公式：按项目统计的Bug修复率=按项目统计的修复Bug数/按项目统计的有效Bug数\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bug de severidad nivel 1 por proyecto',
    'alias'      => 'Bugs con severidad de nivel 1',
    'code'       => 'count_of_severity_1_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bug de severidad nivel 1 por proyecto son la cantidad de Bug descubiertos durante el desarrollo del proyecto que tienen un impacto grave en la funcionalidad o el rendimiento. Estos Bug pueden causar problemas graves como caídas del sistema, funciones que no operan con normalidad o pérdida de datos. Contarlos ayuda a evaluar la estabilidad y la confiabilidad del proyecto.',
    'definition' => "项目中Bug的个数求和\n 严重程度为1级\n 过滤已删除的Bug\n 过滤已删除的项目\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bug de severidad nivel 2 por proyecto',
    'alias'      => 'Bugs con severidad de nivel 2',
    'code'       => 'count_of_severity_2_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bug de severidad nivel 2 por proyecto son la cantidad de Bug descubiertos durante el desarrollo del proyecto que tienen un impacto grave en la funcionalidad o el rendimiento. Estos Bug pueden causar problemas graves como caídas del sistema, funciones que no operan con normalidad o pérdida de datos. Contarlos ayuda a evaluar la estabilidad y la confiabilidad del proyecto.',
    'definition' => "项目中Bug的个数求和\n 严重程度为2级\n 过滤已删除的Bug\n 过滤已删除的项目\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bug de severidad nivel 1 y 2 por proyecto',
    'alias'      => 'Bugs con severidad de nivel 1 y 2',
    'code'       => 'count_of_severe_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Los Bug de severidad nivel 1 y 2 por proyecto son la suma de los Bug de severidad nivel 1 y nivel 2 descubiertos durante el desarrollo del proyecto. Contarlos permite evaluar la calidad y la estabilidad del proceso de desarrollo, y también presta atención a los problemas que afectan la experiencia del usuario y la integridad de las funciones',
    'definition' => "复用： 按项目统计的严重程度为1级的Bug数、按项目统计的严重程度为2级的Bug数。公式： 按项目统计的严重程度为1、2级的Bug数=按项目统计的严重程度为1级的Bug数+按项目统计的严重程度为2级的Bug数\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Nuevos Bug por año por proyecto',
    'alias'      => 'Bugs nuevos',
    'code'       => 'count_of_annual_created_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los nuevos Bug por año por proyecto son la cantidad de Bug nuevos descubiertos por el proyecto en un año determinado. Esta métrica refleja la cantidad de problemas nuevos que aparecen en el proyecto en un año. Una mayor cantidad de nuevos Bug por año puede indicar problemas en el control de calidad que deben atenderse y mejorarse oportunamente.',
    'definition' => "项目中Bug的个数求和\n 创建时间为某年\n 过滤已删除的Bug\n 过滤已删除的项目\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Nuevos Bug por mes por proyecto',
    'alias'      => 'Bugs nuevos',
    'code'       => 'count_of_monthly_created_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Los nuevos Bug por mes por proyecto son la cantidad de Bug nuevos descubiertos en un mes determinado. Esta métrica refleja la cantidad de problemas nuevos que aparecen en el sistema o proyecto en un mes. Un aumento en los nuevos Bug por mes puede indicar problemas en el control de calidad que deben atenderse y mejorarse oportunamente.',
    'definition' => "项目中创建时间在某年某月的Bug个数求和\n过滤已删除的Bug\n过滤已删除的项目\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bug cerrados por mes por proyecto',
    'alias'      => 'Bugs cerrados',
    'code'       => 'count_of_monthly_closed_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Los Bug cerrados por mes por proyecto son la cantidad de Bug cerrados en un mes determinado. Esta métrica refleja la cantidad de Bug confirmados y cerrados cada mes durante el desarrollo del producto. Nos ayuda a conocer la velocidad y la eficiencia con que el equipo de desarrollo confirma y cierra los Bug.',
    'definition' => "Suma de la cantidad de Bug del proyecto cuya fecha de cierre cae en un año y mes determinados, excluyendo los Bug eliminados y los proyectos eliminados.",
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bug corregidos por mes por proyecto',
    'alias'      => 'Bugs corregidos',
    'code'       => 'count_of_monthly_fixed_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Los Bug corregidos por mes por proyecto son la cantidad de Bug resueltos y cerrados cada mes durante el desarrollo del proyecto. Esta métrica nos ayuda a conocer la velocidad y la eficiencia del equipo de desarrollo para resolver Bug.',
    'definition' => "项目中Bug的个数求和\n关闭时间为某年某月\n解决方案为已解决\n过滤已删除的Bug\n过滤已删除的项目\n",
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Bug corregidos por año por proyecto',
    'alias'      => 'Bugs corregidos',
    'code'       => 'count_of_annual_fixed_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los Bug corregidos por año por proyecto son la cantidad de Bug resueltos y cerrados en un año determinado. Esta métrica refleja la cantidad de problemas resueltos por el proyecto en un año. Una mayor cantidad de Bug corregidos por año puede indicar que el equipo de desarrollo es muy eficiente en la resolución de Bug.',
    'definition' => "项目中Bug的个数求和\n关闭时间为某年\n解决方案为已解决\n过滤已删除的Bug\n过滤已删除的项目\n",
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Nuevos Bug válidos por año por proyecto',
    'alias'      => 'Bugs válidos nuevos',
    'code'       => 'count_of_annual_created_effective_bug_in_project',
    'purpose'    => 'scale',
    'scope'      => 'project',
    'object'     => 'bug',
    'unit'       => 'count',
    'dateType'   => 'year',
    'desc'       => 'Los nuevos Bug válidos por año por proyecto son la cantidad de Bug nuevos descubiertos por el proyecto en un año determinado que realmente tienen impacto y valor. Un Bug válido suele ser aquel que causa un funcionamiento anormal del proyecto o afecta la experiencia del usuario. Contar los Bug válidos ayuda a evaluar la estabilidad y la calidad del proyecto, así como la colaboración entre los testers o su conocimiento del proyecto.',
    'definition' => "项目中Bug个数求和\n创建时间为某年\n解决方案为已解决和延期处理或者状态为激活\n过滤已删除的Bug\n过滤已删除的项目\n",
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de aprobación de solicitudes de fusión por sistema',
    'alias'      => 'Tasa de aprobación de solicitudes de fusión del sistema',
    'code'       => 'rate_of_merged_mr',
    'purpose'    => 'qc',
    'scope'      => 'system',
    'object'     => 'codebase',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de aprobación de solicitudes de fusión por sistema es: solicitudes de fusión fusionadas / total de solicitudes de fusión. Al contar la proporción de solicitudes de fusión que se fusionan entre las enviadas en un periodo determinado, el equipo puede monitorear eficazmente la salud de su proceso de revisión de código e identificar a tiempo posibles espacios de mejora.',
    'definition' => "系统已合并合并请求/总的合并请求数\n不统计已删除的合并请求\n不统计已删除代码库里的合并请求\n"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Total de hosts por sistema',
    'alias'      => 'Total de hosts',
    'code'       => 'count_of_host',
    'purpose'    => 'scale',
    'scope'      => 'system',
    'object'     => 'host',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'El total de hosts por sistema es la cantidad total de hosts en AXIS FLOW.',
    'definition' => "Suma de la cantidad de todos los hosts"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Eficiencia de desarrollo per cápita por mes',
    'alias'      => 'Eficiencia de desarrollo per cápita',
    'code'       => 'avg_of_dev_efficiency',
    'purpose'    => 'rate',
    'scope'      => 'system',
    'object'     => 'user',
    'unit'       => 'percentage',
    'dateType'   => 'month',
    'desc'       => 'Se refiere al tamaño promedio de requerimientos que los miembros del equipo completan por unidad de tiempo. Se usa para evaluar la productividad del equipo, la eficiencia en el uso de recursos y lo razonable de la carga de trabajo.',
    'definition' => "按月统计的人均研发效能 = 当月发布的研发需求的规模总数 / 当月禅道系统中的总人数\n当月发布的研发需求，是统计当月阶段状态为已发布、已关闭关闭原因为已完成的研发需求，过滤已删除的研发需求，次月过滤已统计过的研发需求。"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Ciclo de entrega promedio de historias lanzadas por mes',
    'alias'      => 'Ciclo de entrega promedio de historias lanzadas',
    'code'       => 'avg_of_release_story_delivery_time',
    'purpose'    => 'time',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'day',
    'dateType'   => 'month',
    'desc'       => 'Se refiere al tiempo promedio desde que se propone (crea) un requerimiento hasta que se entrega finalmente al cliente o se pone en producción; refleja la eficiencia del equipo u organización en el proceso de implementación de requerimientos. Puede usarse para evaluar la velocidad de respuesta y de entrega de los requerimientos.',
    'definition' => "按月统计的已发布研发需求平均交付周期 = sum ( 当月发布的研发需求的发布时间 - 当月发布的研发需求的创建时间 ) / 当月发布的研发需求总数\n当月发布的研发需求，是统计当月阶段状态为已发布、已关闭关闭原因为已完成的研发需求，过滤已删除的研发需求，次月过滤已统计过的研发需求。"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Densidad promedio de defectos de historias lanzadas por mes',
    'alias'      => 'Densidad promedio de defectos de historias lanzadas',
    'code'       => 'avg_of_release_story_defect_density',
    'purpose'    => 'qc',
    'scope'      => 'system',
    'object'     => 'story',
    'unit'       => 'count',
    'dateType'   => 'month',
    'desc'       => 'Se refiere a la razón entre la cantidad de defectos encontrados en la etapa de pruebas y el tamaño del requerimiento. Refleja la calidad del código o del sistema y se usa para evaluar la calidad del proceso de desarrollo y la efectividad de las pruebas.',
    'definition' => "按月统计的已发布研发需求平均缺陷密度 = sum ( 当月发布的研发需求关联的Bug总数 ) / 当月发布的研发需求的规模总数\n当月发布的研发需求，是统计当月阶段状态为已发布、已关闭关闭原因为已完成的研发需求，过滤已删除的研发需求，次月过滤已统计过的研发需求。\n当月发布的研发需求关联的Bug总数，是统计当月发布的每个研发需求关联Bug，过滤已删除的bug。"
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tasa de finalización de tareas de desarrollo al cierre de la ejecución, por ejecución',
    'alias'      => 'Tasa de finalización de tareas de desarrollo al cierre de la ejecución',
    'code'       => 'rate_of_finished_dev_task_in_execution_when_closing',
    'purpose'    => 'rate',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'percentage',
    'dateType'   => 'nodate',
    'desc'       => 'La tasa de cumplimiento del plan de tareas de desarrollo por ejecución es la razón entre las tareas de desarrollo completadas durante la ejecución y las tareas de desarrollo planeadas al inicio de la ejecución. Esta métrica refleja si el equipo puede completar a tiempo las tareas de desarrollo planificadas y ayuda a identificar posibles problemas en la ejecución.',
    'definition' => "Reutiliza: tareas de desarrollo completadas al cierre de la ejecución, por ejecución; tareas de desarrollo por ejecución. Fórmula: tareas de desarrollo completadas al cierre de la ejecución, por ejecución ÷ tareas de desarrollo por ejecución."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas de desarrollo por ejecución',
    'alias'      => 'Tareas de desarrollo',
    'code'       => 'count_of_dev_task_in_execution',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas de desarrollo por ejecución son la suma de tareas de la ejecución cuyo tipo de tarea es Desarrollo. Esta métrica refleja la carga de trabajo de desarrollo en la ejecución y ayuda al equipo a asignar los recursos de desarrollo.',
    'definition' => "Suma de la cantidad de tareas de la ejecución que cumplen las siguientes condiciones: tipo de tarea Desarrollo, excluyendo las tareas eliminadas, las ejecuciones eliminadas y los proyectos eliminados."
);

$config->bi->builtin->metrics[] = array
(
    'name'       => 'Tareas de desarrollo completadas al cierre de la ejecución, por ejecución',
    'alias'      => 'Tareas de desarrollo completadas al cierre de la ejecución',
    'code'       => 'count_of_finished_dev_task_in_execution_when_closing',
    'purpose'    => 'scale',
    'scope'      => 'execution',
    'object'     => 'task',
    'unit'       => 'count',
    'dateType'   => 'nodate',
    'desc'       => 'Las tareas de desarrollo completadas al cierre de la ejecución, por ejecución, representan la suma de tareas de desarrollo con estado Completada al momento del cierre de la ejecución. Esta métrica refleja la cantidad de tareas de desarrollo completadas por los desarrolladores al cierre de la ejecución y permite evaluar la carga de trabajo real y la eficiencia de desarrollo de los desarrolladores en la ejecución.',
    'definition' => "Suma de la cantidad de tareas de desarrollo de la ejecución que cumplen las siguientes condiciones al cierre de la ejecución: tipo de tarea Desarrollo, estado Completada, o Cerrada con motivo de cierre Completada, excluyendo las tareas eliminadas, las ejecuciones eliminadas y los proyectos eliminados."
);
