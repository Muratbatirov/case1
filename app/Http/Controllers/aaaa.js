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
