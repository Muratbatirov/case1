/*
 * File: app/view/categorytree.js
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

Ext.define('Case.view.categorytree', {
    extend: 'Ext.grid.Tree',
    alias: 'widget.categorytree',

    requires: [
        'Case.view.categorytreeViewModel',
        'Case.view.categorytreeViewController',
        'Ext.grid.column.Tree',
        'Ext.Toolbar'
    ],

    controller: 'categorytree',
    viewModel: {
        type: 'categorytree'
    },
    border: true,
    height: '100%',
    style: 'border-right: 1px solid;',
    width: '100%',
    layout: 'hbox',
    store: 'categorytree',
    hideHeaders: true,

    columns: [
        {
            xtype: 'treecolumn',
            flex: 1,
            hidden: false,
            width: 300,
            dataIndex: 'text',
            text: 'Text'
        }
    ],
    listeners: {
        select: 'onCategoryTreeSelect'
    },
    items: [
        {
            xtype: 'toolbar',
            items: {
                text: 'Показать все',
                handler: 'onShowAll'
            },
            docked: 'top'
        }
    ]

});