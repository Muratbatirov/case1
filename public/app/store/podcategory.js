/*
 * File: app/store/podcategory.js
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

Ext.define('Case.store.podcategory', {
    extend: 'Ext.data.TreeStore',

    requires: [
        'Ext.data.proxy.Rest',
        'Ext.data.reader.Json'
    ],

    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            storeId: 'podcategory',
            autoLoad: true,
            root: {
                expanded: true,
                loaded: true,
                children: [
                    {
                        text: 'Подкатегории',
                        hash: 'catalogs',
                        leaf: true
                    }
                ]
            },
            proxy: {
                type: 'rest',
                url: 'category',
                reader: {
                    type: 'json',
                    rootProperty: 'children'
                }
            },
            listeners: {
                datachanged: {
                    fn: me.onTreeStoreDataChangeD
                }
            }
        }, cfg)]);
    },

    onTreeStoreDataChangeD: function(store, eOpts) {
        store.setRootVisible(false
                           );
    }

});