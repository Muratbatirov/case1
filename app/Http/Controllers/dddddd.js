Ext.define('Case.view.ProductGridViewController', {
    extend: 'Ext.app.ViewController',
    alias: 'controller.productgrid',

    onMenuClick: function(grid, context) {
        var me = this;
        console.log(me);

          var  vm = me.getViewModel();

           var menu = Ext.create({xtype:'menu',
                                 anchor: true,});

           Ext.apply({ownerCmp: me}, me.toolContextMenu);

        menu.add([{
              text: 'EDIT',
              iconCls: 'x-fa fa-edit',
              handler: 'editProduct',
            scope:me
          },
          {
              text: 'DELETE',
              iconCls: 'x-fa crimson fa-trash',
              handler: 'deleteProduct',
               scope:me
          }]);
        me.getViewModel().set('crecord', context.record);
        menu.autoFocus = !context.event.pointerType;
        menu.showBy(context.tool.el, 'l50-r50?');
    },

    editProduct: function() {
        var categoryrecord= this.getViewModel().get('crecord');
        console.log(categoryrecord.data.postavshik_id);

        var me = this;

        let ell = document.getElementsByClassName("x-navigationview");

        let widthcalculate = ell[0].offsetWidth;
        let heightcalculate = ell[0].offsetHeight;

        console.log(widthcalculate);
        let dialogProductEdit = Ext.create({
            docked:'top',
            xtype: 'dialog',
            right: 0,
            shadow:false,
            zIndex:0,
            title: 'Dialog',
            viewModel: {
                data: {
                    crecord: categoryrecord
                }
            },
            width:widthcalculate,
            height:heightcalculate,
            showAnimation:'slide',

            items: [
                {
                    xtype: 'formpanel',
                    viewModel: {
                        data: {
                            crecord: categoryrecord
                        }
                    },
                    reference: 'form',
                    autoSize: true,
                    items: [
                        {
                            xtype: 'containerfield',
                            layout: 'hbox',
                            required: true,
                            defaults: {
                                flex: 1
                            },
                            items: [
                                {
                                    xtype: 'combobox',
                                    ariaLabel:'Категория',

                                    autoLoadOnValue:true,
                                    triggerAction: 'query',
                                    queryMode: 'remote',
                                    picker: 'floated',

                                    heiht:'100px',
                                    floatedPicker: {
                                    },
                                    label: 'Choose State',

                                    displayField: 'category',
                                    valueField: 'id',
                                    bind:{value: '{crecord.category_id}',
                                          store: '{categorycombo}'},



                                },
                                {
                                    xtype: 'combobox',
                                    triggerAction: 'query',
                                    queryMode: 'remote',
                                    picker: 'floated',
                                    ariaLabel:'Поставщик',

                                    autoLoadOnValue:true,

                                    heiht:'100px',
                                    floatedPicker: {
                                    },
                                    label: 'Choose State',
                                    displayField: 'postavshik',
                                    valueField: 'id',


                                    bind:{
                                        store: '{postavshikcombo}',
                                        // displayField: '{crecord.data.postavshik}',
                                        //valueField: '{crecord.data.id}',

                                        value:'{crecord.postavshik_id}'}

                                },

                            ]},
                        {
                            xtype: 'textfield',
                            name: 'name',
                            label: 'Название продукта',
                            bind:{value:'{crecord.name}'},
                            autoLoadOnValue:true,
                            flex: 1,
                            allowBlank: false,
                            required: true
                        },
                        {
                            xtype: 'numberfield',
                            label: 'Цена',
                            name: 'price',
                            fieldLabel: 'Цена',
                            required: true,
                            bind:{  value:'{crecord.data.price}',},

                        },
                        {
                            xtype: 'numberfield',
                            label: 'Количество',
                            required: true,
                            name: 'quantity',
                            fieldLabel: 'Количество',
                            bind:{   value: '{crecord.data.quantity}',},

                        }

                    ],


                    buttons: [{
                        text: 'Сохранить',
                        handler: 'saveFormEditProduct',
                        scope:me

                    }]
                }
            ],


            buttons: {
                ok: function () {  // standard button (see below)
                    dialogProductEdit.destroy();
                    ccloseDialogProduct.destroy();
                }
            }
        });
        let closeDialogProduct = Ext.create({
            docked:'top',
            xtype: 'dialog',
            right: widthcalculate,

            top:100,

            zIndex:0,
            minWidth:'50px',
            width: '60px',
            height:'60px',

            showAnimation:'slide',
            style: 'border-radius: 50% 0% 0% 50%; color:rgba(63,156,239,0.75)!important;',


            items: [{
                xtype: 'button',
                iconCls: 'x-fa fa-times',
                style: 'padding:  0 0 20px 0',
                listeners: {
                    tap: function () {
                        closeDialogProduct.destroy();
                        dialogProductEdit.destroy();

                    }
                }
            }]

        });

        closeDialogProduct.show();
        dialogProductEdit.show();


    },

    deleteProduct: function() {
        console.log(this.getViewModel().get('crecord'));
        var recordId= this.getViewModel().get('crecord').data.id;
        //let store = Case.app.getStore('productstore');
        Ext.Ajax.request({
             url: 'productlist/delete',
             params:{recordid:recordId},
             success: function(response, opts) {
                  console.log(Case.app.getStore('productstore').findRecord('id',recordId));
                 Case.app.getStore('productstore').findRecord('id',recordId).drop();

             },

             failure: function(response, opts) {
                 console.log('server-side failure with status code ' + response.status);
             }
         });
    },

    saveFormEditProduct: function() {
          var me = this,
                    form = me.lookupReference('form');
          form.submit({ url: 'PostMyData/To', method:
                       'Post', success: function(form,result,data) {
                           Ext.Msg.alert("Данные успешно сохранены");

                       },
                       failure: function() { Ext.Msg.alert("error"); } });
    },

    onDobavitProduct: function(button, e, eOpts) {
        let ell = document.getElementsByClassName("x-navigationview");
        let workspase= button.up('mainview').lookupReference('workspace');
        let widthcalculate = ell[0].offsetWidth;
        let heightcalculate = ell[0].offsetHeight;

        console.log(widthcalculate);
        let dialogproduct = Ext.create({
            docked:'top',
            xtype: 'dialog',
            right: 0,
            shadow:false,
            zIndex:100,
            title: 'Dialog',

            width:widthcalculate,
            height:heightcalculate,
            showAnimation:'slide',

            html: 'Content<br>goes<br>here',

            buttons: {
                ok: function () {  // standard button (see below)
                    dialogproduct.destroy();
                    closedialog.destroy();
                }
            }
        });
        let closedialog = Ext.create({
            docked:'top',
            xtype: 'dialog',
            right: widthcalculate,

            top:100,

            zIndex:100,
            minWidth:'50px',
            width: '60px',
            height:'60px',

            showAnimation:'slide',
            style: 'border-radius: 50% 0% 0% 50%; color:rgba(63,156,239,0.75)!important;',


            items: [{
                xtype: 'button',
                iconCls: 'x-fa fa-times',
                style: 'padding:  0 0 20px 0',
                listeners: {
                    tap: function () {
                        closedialog.destroy();
                        dialogproduct.destroy();

                    }
                }
            }]

        });

        closedialog.show();
        dialogproduct.show();


    }

});
 Ext.Ajax.request({
             url: 'productlist/edit',
             params:{recordid:recordId,postavshik_id:rec.postavshik_id ,
                     category_id:rec.category_id, name:rec.name, price:rec.price,quantity:rec.quantity,
                    opisanie:rec.opisanie},
             success: function(response, opts) {
                 //console.log(Case.app.getStore('productstore').findRecord('id',recordId));
                Case.app.getStore('productstore').findRecord('id',recordId).save();

             },

             failure: function(response, opts) {
                 console.log('server-side failure with status code ' + response.status);
             }
         });