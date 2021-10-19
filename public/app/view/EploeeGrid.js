/*
 * File: app/view/EploeeGrid.js
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

Ext.define('Case.view.EploeeGrid', {
    extend: 'Ext.grid.Grid',
    alias: 'widget.eploeegrid',

    requires: [
        'Case.view.EploeeGridViewModel',
        'Case.view.EploeeGridViewController',
        'Ext.grid.column.Check',
        'Ext.grid.column.Date',
        'Ext.dataview.plugin.ListPaging',
        'Ext.Toolbar',
        'Ext.Button',
        'Ext.grid.plugin.Summary'
    ],

    config: {
        toolContextMenu: {
            xtype: 'menu',
            anchor: true,
            separator: true,
            minWidth: 150,
            autoHide: false,
            viewModel: {
                
            },
            cls: 'round-context-menu'
        }
    },

    controller: 'eploeegrid',
    viewModel: {
        type: 'eploeegrid'
    },
    height: '100%',
    width: '100%',
    defaults: {
        flex: 1
    },
    layout: 'hbox',
    store: 'EmploeeStore',

    columns: [
        {
            xtype: 'gridcolumn',
            width: '30px',
            cell: {
                cls: 'erg-tool-margin-0',
                tools: {
                    margin: 0,
                    menu: 'onMenuClick'
                }
            }
        },
        {
            xtype: 'gridcolumn',
            summaryRenderer: function(value, context) {

                return `На странице ${value} из ${context.store.totalCount}`;
            },
            filterType: 'string',
            flex: 1,
            dataIndex: 'surname',
            summary: 'count',
            text: 'Фамилия'
        },
        {
            xtype: 'gridcolumn',
            flex: 1,
            dataIndex: 'name',
            text: 'Имя'
        },
        {
            xtype: 'gridcolumn',
            flex: 1,
            dataIndex: 'patronymic',
            text: 'Отчество'
        },
        {
            xtype: 'gridcolumn',
            dataIndex: 'direction',
            text: 'Направления'
        },
        {
            xtype: 'checkcolumn',
            flex: 0.5,
            disabled: true,
            dataIndex: 'dismissed',
            editable: false,
            text: 'Уволен'
        },
        {
            xtype: 'datecolumn',
            flex: 0.5,
            dataIndex: 'comedate',
            text: 'Дата приёма на работу'
        },
        {
            xtype: 'datecolumn',
            flex: 0.5,
            dataIndex: 'exitdate',
            text: 'Дата увольнения'
        }
    ],
    plugins: [
        {
            autoPaging: true,
            type: 'listpaging'
        },
        {
            type: 'gridsummaryrow'
        }
    ],
    items: [
        {
            xtype: 'toolbar',
            docked: 'bottom',
            items: [
                {
                    xtype: 'button',
                    cls: 'createButton',
                    text: 'Добавить',
                    listeners: {
                        tap: 'onDobavitProduct1'
                    }
                }
            ]
        },
        {
            xtype: 'toolbar',
            docked: 'top',
            title: 'Список сотрудников'
        }
    ],
    listeners: {
        childdoubletap: 'onGridChilddoubletap',
        painted: 'onGridPainted',
        childsingletap: 'onGridChildsingletap'
    }

});