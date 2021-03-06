/*
 * File: app/view/Reports.js
 *
 * This file was generated by Sencha Architect version 4.2.9.
 * http://www.sencha.com/products/architect/
 *
 * This file requires use of the Ext JS 7.3.x Modern library, under independent license.
 * License of Sencha Architect does not include license for Ext JS 7.3.x Modern. For more
 * details see http://www.sencha.com/license or contact license@sencha.com.
 *
 * This file will be auto-generated each and everytime you save your project.
 *
 * Do NOT hand edit this file.
 */

Ext.define('Case.view.Reports', {
    extend: 'Ext.grid.Grid',
    alias: 'widget.reports',

    requires: [
        'Case.view.ReportsViewModel',
        'Ext.grid.column.Column'
    ],

    viewModel: {
        type: 'reports'
    },
    height: '100%',
    width: '100%',
    layout: 'hbox',

    columns: [
        {
            xtype: 'gridcolumn',
            flex: 1,
            name: 'name',
            dataIndex: 'name',
            text: 'Название направления'
        }
    ]

});