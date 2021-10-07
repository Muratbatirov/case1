/*
 * File: app.js
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

// @require @packageOverrides
Ext.Loader.setConfig({

});


Ext.application({
    models: [
        'Category',
        'productmodel'
    ],
    stores: [
        'Categories',
        'leftMenu',
        'categorytree',
        'productstore'
    ],
    views: [
        'MyToolbar',
        'mynestedlist',
        'ProductGrid',
        'categorytree',
        'MyNavigationView1',
        'MyDialog'
    ],
    controllers: [
        'navigation',
        'Menu'
    ],
    name: 'Case',

    launch: function() {
        Ext.create('Case.view.mainview', {fullscreen: true});
    }

});
