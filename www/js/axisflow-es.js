/* AXIS FLOW: paquete de idioma espanol para los componentes ZUI (selectores, fechas, subida de archivos, tiempos relativos...). */
(function()
{
    if(!window.zui || !zui.i18n || !zui.i18n.addLang) return;

    zui.i18n.addLang({es: {
        /* Globales */
        confirm: 'Confirmar', save: 'Guardar', cancel: 'Cancelar', delete: 'Eliminar', reset: 'Restablecer', add: 'Agregar',
        copy: 'Copiar', close: 'Cerrar', edit: 'Editar', open: 'Abrir', more: 'Más', loading: 'Cargando...',
        showMore: 'Quedan {count} elementos, haga clic para ver más',
        /* Selector de fechas */
        today: 'Hoy', yearFormat: '{0}',
        weekNames: ['DOM', 'LUN', 'MAR', 'MIÉ', 'JUE', 'VIE', 'SÁB'],
        monthNames: ['Ene.', 'Feb.', 'Mar.', 'Abr.', 'May.', 'Jun.', 'Jul.', 'Ago.', 'Sep.', 'Oct.', 'Nov.', 'Dic.'],
        /* Subida de archivos */
        selectFile: 'Seleccionar archivo', fileSelectTip: '(Máximo {maxFileSize})', removeFile: 'Quitar archivo', renameFile: 'Renombrar',
        duplicatedTip: 'El archivo “{name}” ({size}) ya existe.',
        exceededSizeTip: 'El archivo “{name}” ({size}) supera el límite de {maxFileSize}.',
        exceededTotalSizeTip: 'El archivo “{name}” ({size}) supera el tamaño total permitido de {totalFileSize}.',
        exceededCountTip: 'El archivo “{name}” ({size}) supera el límite de {maxFileCount} archivos.',
        /* Selector (picker) */
        selectAll: 'Seleccionar todo', cancelSelect: 'Quitar selección', searchEmptyHint: 'Sin opciones coincidentes',
        createHint: 'Crear “{0}”', loadingHint: 'Cargando...', exceedLimitHint: 'Hay {0} elementos sin mostrar; use la búsqueda para encontrarlos',
        /* Tablas */
        ditto: 'Igual', sort: 'Ordenar',
        checkedCountInfo: 'Seleccionados {selected} elementos', totalCountInfo: 'Total {total} elementos',
        setDivider: 'Definir divisor', leftDivider: 'Lado izquierdo', rightDivider: 'Lado derecho', allDivider: 'Ambos lados',
        noDivider: 'Sin divisor', hideCol: 'Ocultar esta columna',
        occurredError: 'Ocurrió un error', unassigned: 'Sin asignar',
        /* Documentos */
        progressTip: 'Migrando documentos...({current}/{total})', finish: 'Migración finalizada',
        /* Tiempos relativos */
        ago: {
            justNow: 'Justo ahora', xAgo: 'hace {0}', xLater: 'dentro de {0}', lessThanAMinute: 'Menos de un minuto',
            yesterday: 'Ayer', dayBeforeYesterday: 'Anteayer', tomorrow: 'Mañana',
            minutes: '{0} minutos', hours: '{0} horas', days: '{0} días', weeks: '{0} semanas', months: '{0} meses', years: '{0} años'
        }
    }});
})();
