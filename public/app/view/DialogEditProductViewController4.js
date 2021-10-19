/*
 * File: app/view/DialogEditProductViewController4.js
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

Ext.define('Case.view.DialogEditProductViewController4', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.dialogdirectionadd',

    onButtonTap: function(button, e, eOpts) {
        var me =  this;
        refs = me.getReferences();

        if (refs.form.validate()) {
            var cr= button.up('formpanel').getViewModel().get('crecord');


            Ext.Ajax.request({
                url: 'directionlist/add',
                params:{name:cr.name,director:cr.director,opisanie:cr.opisanie},
                success: function(response, opts) {

                    Case.app.getStore('directionstore').load();
                    Case.app.getStore('reports').load();
                    Ext.Msg.alert("Masege" , "Dannie uspeshno soxraneni");

                },

                failure: function(response, opts) {
                    Ext.Msg.alert("Ошибка" , "Poprobuyte esho raz");
                }
            });


        }

        //
        //var rec = button.up('formpanel').getViewModel().get('crecord').data;
        //let store = Case.app.getStore('productstore');

        //Case.app.getStore('productstore').findRecord('id',recordId).save({
        //  failure: function(record, operation) {

        //    Ext.Msg.alert("Ошибка" , "Poprobuyte esho raz");
        //},
        //  success: function(record, operation) {
        //  Ext.ComponentQuery.query('productgrid')[0].refresh();
        //   Ext.Msg.alert("Masege" , "Dannie uspeshno soxraneni");

        // },
        // callback: function(record, operation, success) {
        // do something whether the save succeeded or failed
        // }
        //}      );




    },

    onDialogBeforeShow: function(component, eOpts) {
        let me = this,
        refs = me.getReferences(),
        vm = me.getViewModel();

        refs.form.validate();
    }

});