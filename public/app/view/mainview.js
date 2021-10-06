/*
 * File: app/view/mainview.js
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

Ext.define('Case.view.mainview', {
    extend: 'Ext.Container',
    alias: 'widget.mainview',

    requires: [
        'Case.view.mainviewViewModel',
        'Case.view.mainviewViewController',
        'Case.view.MyNavigationView1',
        'Ext.list.Tree',
        'Ext.navigation.View'
    ],

    controller: 'mainview',
    viewModel: {
        type: 'mainview'
    },
    layout: 'hbox',

    listeners: {
        painted: 'onPanelPainted'
    },
    items: [
        {
            xtype: 'treelist',
            reference: 'leftMenuTree',
            height: '100%',
            style: {
                background: '#37517e'
            },
            ui: 'nav',
            width: '300px',
            store: 'leftMenu',
            listeners: {
                itemclick: 'onTreelistItemClick'
            }
        },
        {
            xtype: 'mynavigationview1',
            flex: 1,
            reference: 'workspace'
        }
    ]

});