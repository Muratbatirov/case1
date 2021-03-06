/*
 * File: app/view/directiontree.js
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

Ext.define('Case.view.directiontree', {
    extend: 'Ext.grid.Tree',
    alias: 'widget.directiontree',

    requires: [
        'Case.view.directiontreeViewModel',
        'Case.view.directiontreeViewController',
        'Ext.grid.column.Tree',
        'Ext.Toolbar'
    ],

    controller: 'directiontree',
    viewModel: {
        type: 'directiontree'
    },
    height: '100%',
    width: '100%',
    layout: 'hbox',
    store: 'directionstore',
    hideHeaders: true,

    columns: [
        {
            xtype: 'treecolumn',
            flex: 1,
            dataIndex: 'name'
        }
    ],
    items: [
        {
            xtype: 'toolbar',
            items: {
                xtype: 'button',
                text: 'Показать все',
                handler: 'onShowAll'
            },
            docked: 'top'
        }
    ],
    listeners: {
        select: 'onTreeSelect'
    }

});