/*
 * File: app/view/directiontreegridViewController.js
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

Ext.define('Case.view.directiontreegridViewController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.directiontreegrid',

    onMenuClick1: function(grid, context) {
        var me = this;


           var menu = Ext.create({xtype:'menu',
                                 anchor: true,});

           Ext.apply({ownerCmp: me}, me.toolContextMenu);

        menu.add([{
              text: 'EDIT',
              iconCls: 'x-fa fa-edit',
              handler: 'editEmploee1',
            scope:me
          },
          {
              text: 'DELETE',
              iconCls: 'x-fa crimson fa-trash',
              handler: 'deleteEmploee1',
               scope:me
          }]);
        me.getViewModel().set('crecord', context.record);
        menu.autoFocus = !context.event.pointerType;
        menu.showBy(context.tool.el, 'l50-r50?');
    },

    editEmploee1: function() {
        var categoryrecord= this.getViewModel().get('crecord');
        console.log(categoryrecord);

        var me = this;

        let ell = document.getElementsByClassName("x-navigationview");
         let editcombostore= Case.app.getStore('directioneditcombo');

                editcombostore.addListener({
                    load: me.oneditstore1,
                    scope:me

                });

        let widthcalculate = ell[0].offsetWidth;
        let heightcalculate = ell[0].offsetHeight;


        let dialogProductEdit = Ext.create({
           xtype: 'dialogeditdirection',
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

    deleteEmploee1: function() {

        var id= this.getViewModel().get('crecord').data.id;

        Ext.Ajax.request({
             url: 'directionlist/delete',
             params:{id:id},
             success: function(response, opts) {
                  if(response.responseText=='true'){
                   Case.app.getStore('directionstore').findRecord('id',id).drop();
                }else{
                   Ext.Msg.alert("????????????" , response.responseText);
               }



             },

             failure: function(response, opts) {
                 console.log('server-side failure with status code ' + response.status);
             }
         });
    },

    oneditstore1: function(thiss, records, successful, operation, eOpts) {
         var me= this;




                var categoryrecord= me.getViewModel().get('crecord').data.id;
                console.log(categoryrecord);
                var arr =[];

                arr=records;




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
        arrnew=[{"id":0,"parent_id":null,"direction":"??????","parentdirection":"null","level":0}];
         arr.forEach(function(item, i, arr) {
            arrnew.push(item.data);

         });
        thiss.setData(arrnew);


    },

    onDobavitProduct11: function(button, e, eOpts) {
        var categoryrecord= this.getViewModel().get('crecord');
        console.log(categoryrecord);

        var me = this;

        let ell = document.getElementsByClassName("x-navigationview");

        let widthcalculate = ell[0].offsetWidth;
        let heightcalculate = ell[0].offsetHeight;

        let editcombostore= Case.app.getStore('directioneditcombo');

        editcombostore.addListener({
            load: me.oneditstore1,
            scope:me

        });

        let dialogProductEdit = Ext.create({
            xtype: 'dialogdirectionadd',
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

    onTreeChilddoubletap: function(list, location, eOpts) {
        this.getViewModel().set('crecord', location.record);

        this.editEmploee1();
    }

});