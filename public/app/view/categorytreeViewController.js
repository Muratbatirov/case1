/*
 * File: app/view/categorytreeViewController.js
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

Ext.define('Case.view.categorytreeViewController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.categorytree',

    onShowAll: function() {

                    let store1 = Case.app.getStore('productstore');
         store1.getProxy().setExtraParams({
                        'param':false,


                    });

                    store1.loadPage(1,{
                           callback: function(records, operation, success) {
                             Case.app.getStore('productstore').getProxy().setExtraParams({



                });

              }}


                                   );
    },

    onCategoryTreeSelect: function(dataview, selected, eOpts) {



        let store = Case.app.getStore('productstore');

        store.getProxy().setExtraParams({
            'param':selected[0].data.text,



        });
        store.loadPage(1,{
            callback: function(records, operation, success) {

                Case.app.getStore('productstore').getProxy().setExtraParams({



                });
            }
        });






    }

});