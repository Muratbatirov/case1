/*
 * File: app/store/categoryEditCombo.js
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

Ext.define('Case.store.categoryEditCombo', {
    extend: 'Ext.data.Store',

    requires: [
        'Case.model.categoryEditCombo'
    ],

    constructor: function(cfg) {
        var me = this;
        cfg = cfg || {};
        me.callParent([Ext.apply({
            storeId: 'categoryEditCombo',
            model: 'Case.model.categoryEditCombo',
            listeners: {
                datachanged: {
                    fn: me.onStoreDataChangeD
                }
            }
        }, cfg)]);
    },

    onStoreDataChangeD: function(store, eOpts) {
         //store.add({"id":0,"parent_id":null,"category":"Нет","parentcategory":"null","level":0});
           //     store.sort('id', 'ASC');
    }

});