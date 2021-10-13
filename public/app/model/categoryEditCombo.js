/*
 * File: app/model/categoryEditCombo.js
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

Ext.define('Case.model.categoryEditCombo', {
    extend: 'Ext.data.Model',

    requires: [
        'Ext.data.field.Integer',
        'Ext.data.field.String',
        'Ext.data.proxy.Rest',
        'Ext.data.reader.Json'
    ],


    fields: [
        {
            type: 'int',
            name: 'id'
        },
        {
            type: 'int',
            name: 'parent_id'
        },
        {
            type: 'string',
            name: 'category'
        },
        {
            type: 'string',
            name: 'parentcategory'
        },
        {
            type: 'int',
            name: 'level'
        }
    ],
    proxy: {
        type: 'rest',
        url: '/categoryeditcombo',
        reader: {
            type: 'json',
            rootProperty: 'data'
        }
    }

});