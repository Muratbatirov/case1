/*
 * File: app/view/editcategorytreeViewController.js
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

Ext.define('Case.view.editcategorytreeViewController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.editcategorytree',

    onMenuClick: function(grid, context) {
        var me = this;


          var  vm = me.getViewModel();
        console.log(me);

           var menu = Ext.create({xtype:'menu',
                                 anchor: true,});

           Ext.apply({ownerCmp: me}, me.toolContextMenu);

        menu.add([{
              text: 'EDIT',
              iconCls: 'x-fa fa-edit',
              handler: 'editCategory',
            scope:me
          },
          {
              text: 'DELETE',
              iconCls: 'x-fa crimson fa-trash',
              handler: 'deleteCategory',
               scope:me
          }]);

        me.getViewModel().set('crecordtree', context.record);
        menu.autoFocus = !context.event.pointerType;
        menu.showBy(context.tool.el, 'l50-r50?');
    },

    editCategory: function() {
         var me= this;


                let dialog=Ext.create({
                   xtype: 'dialogeditcategory'});

                var categoryrecord=  this.getViewModel().get('crecordtree');
        console.log(categoryrecord);

                let editcombostore= Case.app.getStore('categoryEditCombo');

                editcombostore.addListener({
                    load: me.oneditstore,
                    scope:me

                });






                let ell = document.getElementsByClassName("x-navigationview");

                let widthcalculate = ell[0].offsetWidth;
                let heightcalculate = ell[0].offsetHeight;
                dialog.setConfig('width',widthcalculate);

                dialog.setConfig('height',heightcalculate);
                dialog.setConfig('buttons',{
                              ok: function () {


                                dialog.destroy();

                               }
                           });



                dialog.down('formpanel').setViewModel({data:{crecordtree:categoryrecord}});

                dialog.show();

    },

    deleteCategory: function() {

        var crecord= this.getViewModel().get('crecordtree');
        //let store = Case.app.getStore('productstore');
        Ext.Ajax.request({
             url: 'categorylist/delete',
             params:{id:crecord.data.id},
             success: function(response, opts) {
                if(response.responseText=='true'){
                    Case.app.getStore('categoryedittree').findRecord('id',crecord.data.id).drop();
                }else{
                   Ext.Msg.alert("????????????" , response.responseText);
               }


             },

             failure: function(response, opts) {
                 Ext.Msg.alert("????????????" , response.responseText);
             }
         });
    },

    oneditstore: function(thiss, records, successful, operation, eOpts) {
         var me= this;




                var categoryrecord= me.getViewModel().get('crecordtree').data.id;
                console.log(categoryrecord);
                var arr =[];

                arr=records;
        console.log(arr);
        function recurse(rec,  categoryrec) {
                if(rec) {
                rec.forEach(function(item, i, rec) {

                                       if((item.data.id)&&item.data.id==categoryrec){
                                           delete rec[i];
                                       }
                                if((item.data.parent_id)&&item.data.parent_id==categoryrec){


                                 delete rec[i];
                                  recurse(rec,item.data.id);


                                }



                        });}
            }




        recurse(arr,categoryrecord );
        arrnew=[{"id":0,"parent_id":null,"category":"??????","parentcategory":"null","level":0}];
         arr.forEach(function(item, i, arr) {
            arrnew.push(item.data);

         });
        thiss.setData(arrnew);


    }

});