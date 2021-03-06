/*
 * File: app/view/directiontreegrid.js
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

Ext.define('Case.view.directiontreegrid', {
    extend: 'Ext.grid.Tree',
    alias: 'widget.directiontreegrid',

    requires: [
        'Case.view.directiontreegridViewModel',
        'Case.view.directiontreegridViewController',
        'Ext.grid.column.Tree',
        'Ext.Toolbar',
        'Ext.Button'
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

    controller: 'directiontreegrid',
    viewModel: {
        type: 'directiontreegrid'
    },
    height: '100%',
    width: '100%',
    layout: 'hbox',
    store: 'directionstore',

    columns: [
        {
            xtype: 'gridcolumn',
            width: '30px',
            cell: {
                cls: 'erg-tool-margin-0',
                tools: {
                    margin: 0,
                    menu: 'onMenuClick1'
                }
            },
            text: 'MyColumn17'
        },
        {
            xtype: 'treecolumn',
            flex: 1,
            dataIndex: 'name',
            text: 'Название направления'
        },
        {
            xtype: 'gridcolumn',
            flex: 1,
            dataIndex: 'director',
            text: 'Руководитель'
        },
        {
            xtype: 'gridcolumn',
            flex: 1,
            dataIndex: 'opisanie',
            text: 'Описание направления'
        }
    ],
    items: [
        {
            xtype: 'toolbar',
            docked: 'top',
            title: 'Список направлений'
        },
        {
            xtype: 'toolbar',
            docked: 'bottom',
            items: [
                {
                    xtype: 'button',
                    cls: 'createButton',
                    text: 'Добавить',
                    listeners: {
                        tap: 'onDobavitProduct11'
                    }
                }
            ]
        }
    ],
    listeners: {
        childdoubletap: 'onTreeChilddoubletap'
    }

});