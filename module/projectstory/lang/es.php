<?php
/* Field. */
$lang->projectstory->project = "{$lang->projectCommon}ID";
$lang->projectstory->product = "{$lang->productCommon} ID";
$lang->projectstory->story   = "ID de historia";
$lang->projectstory->version = "Versión";
$lang->projectstory->order   = "Ordenar";

$lang->projectstory->storyCommon = $lang->projectCommon . ' Historia';
$lang->projectstory->storyList   = $lang->projectCommon . ' Lista de historias';
$lang->projectstory->storyView   = $lang->projectCommon . ' Detalles de la historia';

$lang->projectstory->common            = "Historia de {$lang->projectCommon}";
$lang->projectstory->index             = "Inicio de historias";
$lang->projectstory->view              = "Detalles de la historia";
$lang->projectstory->story             = "Lista de historias";
$lang->projectstory->track             = 'Matriz de trazabilidad';
$lang->projectstory->linkStory         = 'Vincular historia';
$lang->projectstory->unlinkStory       = 'Desvincular historia';
$lang->projectstory->report            = 'Informe de historias';
$lang->projectstory->export            = 'Exportar historias';
$lang->projectstory->batchReview       = 'Revisar historias por lote';
$lang->projectstory->batchClose        = 'Cerrar historias por lote';
$lang->projectstory->batchChangePlan   = 'Cambiar planes por lote';
$lang->projectstory->batchAssignTo     = 'Asignar historias por lote';
$lang->projectstory->batchEdit         = 'Editar historias por lote';
$lang->projectstory->batchSubmitReview = 'Enviar a revisión por lote';
$lang->projectstory->importToLib       = 'Importar a biblioteca de historias';
$lang->projectstory->batchImportToLib  = 'Importar a la biblioteca de historias por lote';
$lang->projectstory->importCase        = 'Importar historias';
$lang->projectstory->exportTemplate    = 'Exportar plantilla';
$lang->projectstory->batchUnlinkStory  = 'Desvincular historias por lote';
$lang->projectstory->importplanstories = 'Vincular historias por plan';
$lang->projectstory->trackAction       = 'Matriz de trazabilidad';
$lang->projectstory->confirm           = 'Confirmar';

/* Notice. */
$lang->projectstory->whyNoStories   = "No hay historias para vincular. Verifique si en {$lang->projectCommon} hay alguna historia vinculada a {$lang->productCommon} y asegúrese de que haya sido revisada.";
$lang->projectstory->batchUnlinkTip = "Se quitaron todas las demás historias. Las siguientes están vinculadas a ejecuciones de {$lang->projectCommon}. Quítelas antes de continuar.";

$lang->projectstory->featureBar['story']['allstory']  = 'Todos';
$lang->projectstory->featureBar['story']['unclosed']  = 'Abierto';
$lang->projectstory->featureBar['story']['draft']     = 'Borrador';
$lang->projectstory->featureBar['story']['reviewing'] = 'En revisión';
$lang->projectstory->featureBar['story']['changing']  = 'Cambiando';
$lang->projectstory->featureBar['story']['more']      = $lang->more;

$lang->projectstory->moreSelects['story']['more']['closed']            = 'Cerrado';
$lang->projectstory->moreSelects['story']['more']['linkedexecution']   = 'Vinculado '   . $lang->execution->common;
$lang->projectstory->moreSelects['story']['more']['unlinkedexecution'] = 'Desvinculado ' . $lang->execution->common;
