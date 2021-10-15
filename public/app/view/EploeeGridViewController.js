/*
 * File: app/view/EploeeGridViewController.js
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

Ext.define('Case.view.EploeeGridViewController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.eploeegrid',

    onMenuClick: function(grid, context) {
        var me = this;


           var menu = Ext.create({xtype:'menu',
                                 anchor: true,});

           Ext.apply({ownerCmp: me}, me.toolContextMenu);

        menu.add([{
              text: 'EDIT',
              iconCls: 'x-fa fa-edit',
              handler: 'editEmploee',
            scope:me
          },
          {
              text: 'DELETE',
              iconCls: 'x-fa crimson fa-trash',
              handler: 'deleteEmploee',
               scope:me
          }]);
        me.getViewModel().set('crecord', context.record.clone());
        console.log(context.record);
        menu.autoFocus = !context.event.pointerType;
        menu.showBy(context.tool.el, 'l50-r50?');
    },

    editEmploee: function() {
        var categoryrecord= this.getViewModel().get('crecord');
        console.log(categoryrecord);

        var me = this;

        let ell = document.getElementsByClassName("x-navigationview");

        let widthcalculate = ell[0].offsetWidth;
        let heightcalculate = ell[0].offsetHeight;


        let dialogProductEdit = Ext.create({
           xtype: 'dialogemploeeedit',
            right: 0,
            shadow:false,
            zIndex:0,
            width:widthcalculate,
                    height:heightcalculate,
                    showAnimation:'slide',
        buttons: {
                        ok: function () {  // standard button (see below)
                            dialogProductEdit.destroy();

                        }
                    }

        });

        dialogProductEdit.down('formpanel').setViewModel({data:{crecord:categoryrecord}});
        dialogProductEdit.show();
    },

    deleteEmploee: function() {

        var recordId= this.getViewModel().get('crecord').data.id;
        //let store = Case.app.getStore('productstore');
        Ext.Ajax.request({
             url: 'emploeelist/delete',
             params:{id:recordId},
             success: function(response, opts) {

                 Case.app.getStore('EmploeeStore').findRecord('id',recordId).drop();

             },

             failure: function(response, opts) {
                 console.log('server-side failure with status code ' + response.status);
             }
         });
    },

    onDobavitProduct1: function(button, e, eOpts) {
        var categoryrecord= this.getViewModel().get('crecord');
        console.log(categoryrecord);

        var me = this;

        let ell = document.getElementsByClassName("x-navigationview");

        let widthcalculate = ell[0].offsetWidth;
        let heightcalculate = ell[0].offsetHeight;


        let dialogProductEdit = Ext.create({
            xtype: 'dialogemploeeadd',
            right: 0,
            shadow:false,
            zIndex:0,
            width:widthcalculate,
            height:heightcalculate,
            showAnimation:'slide',
            buttons: {
                ok: function () {  // standard button (see below)
                    dialogProductEdit.destroy();

                }
            }

        });

        dialogProductEdit.down('formpanel').setViewModel({data:{crecord:null}});
        dialogProductEdit.show();
    },

    onGridChilddoubletap: function(list, location, eOpts) {
        this.getViewModel().set('crecord', location.record.clone());

        this.editEmploee();
    },

    onGridPainted: function(sender, element, eOpts) {

    }

});