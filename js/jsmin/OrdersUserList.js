!function(e){var t={};function r(a){if(t[a])return t[a].exports;var c=t[a]={i:a,l:!1,exports:{}};return e[a].call(c.exports,c,c.exports,r),c.l=!0,c.exports}r.m=e,r.c=t,r.d=function(e,t,a){r.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:a})},r.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},r.t=function(e,t){if(1&t&&(e=r(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var a=Object.create(null);if(r.r(a),Object.defineProperty(a,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var c in e)r.d(a,c,function(t){return e[t]}.bind(null,c));return a},r.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return r.d(t,"a",t),t},r.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},r.p="",r(r.s=38)}({38:function(e,t,r){"use strict";r.r(t),r.d(t,"OrdersUserList",(function(){return a}));class a extends React.Component{constructor(e){super(e),this.state={error:null,isLoaded:!1,items:[],itemOrder:[],order_id:-1,order_id_search:"",itemExec:0,o_name:"",o_phone:"",o_email:"",o_description:"",description_manager:"",date_manager:""}}componentDidMount(){fetch("/includes/get_data.php?x=get_orders&users=1").then(e=>e.json()).then(e=>{this.setState({isLoaded:!0,items:e})},e=>{this.setState({isLoaded:!0,error:e})})}loadDataS(){this.loadData(this.state.order_id_search)}loadData(e){fetch("/includes/get_data.php?x=get_orders&order_id="+e).then(e=>e.json()).then(t=>{t.length>1&&this.setState({isLoaded:!0,order_id:t[0].id,o_name:t[0].name,o_phone:t[0].phone,o_email:t[0].email,o_description:t[0].description,description_manager:t[0].descript_manager,date_manager:t[0].date_manager,itemExec:t[0].exec,itemOrder:t[1],order_id:e})},e=>{this.setState({isLoaded:!0,error:e})})}openOrder(e,t,r,a,c,o,n,l){this.setState({isLoaded:!1,o_name:r,o_phone:a,o_email:c,o_description:o,description_manager:n,date_manager:l,itemExec:t}),this.loadData(e)}execute(e){return 2==e?React.createElement("i",{className:"icon-ok"}):3==e?React.createElement("i",{className:"icon-cancel"}):""}AllSum(){let e=0;return this.state.itemOrder.forEach((function(t,r,a){e+=null===t.sum?0:parseFloat(t.sum)})),new Intl.NumberFormat("ru-RU",{style:"currency",currency:"RUB"}).format(e)}changeSearch(e){this.setState({order_id_search:e.target.value})}onEnterPress(e){"Enter"===e.key&&this.loadDataS()}searchClear(){this.setState({order_id_search:""}),this.loadData(this.state.order_id_search)}date_parse(e){var t=new Date(e),r=t.toLocaleTimeString();return t.toLocaleString("ru",{year:"numeric",month:"long",day:"numeric"})+" "+r}execText(e){return 1==e?React.createElement("b",{className:"order_ready"},"Готов к выдаче"):2==e?React.createElement("b",{className:"order_exec"},"Заказ выполнен"):3==e?React.createElement("b",{className:"order_cancel"},"Заказ отменен"):""}render(){const{error:e,isLoaded:t,items:r,itemOrder:a,order_id:c}=this.state;return e?React.createElement("div",null,"Ошибка: ",e.message):t?-1==c?React.createElement("div",{className:"row section-heading"},React.createElement("input",{type:"search",name:"search",id:"headerSearch",value:this.state.order_id_search,className:"col-2 form-control",placeholder:"поиск по номеру",onChange:e=>this.changeSearch(e),onKeyPress:e=>this.onEnterPress(e)}),React.createElement("button",{className:"btn bg-transparent",style:{marginLeft:"-40px",zIndex:"100"},onClick:()=>this.searchClear()},React.createElement("i",{className:"fa fa-times"})),React.createElement("button",{className:"btn edit-btn-search-icon",onClick:()=>this.loadDataS()},React.createElement("i",{className:"fa fa-search","aria-hidden":"true"})),React.createElement("table",{className:"table table-hover"},React.createElement("thead",null,React.createElement("tr",null,React.createElement("th",{width:"100px",scope:"col",className:"border-top-0 border-right border-bottom-0"},"№"),React.createElement("th",{width:"200px",scope:"col",className:"border-top-0 border-right border-bottom-0"},"Дата и время"),React.createElement("th",{scope:"col",className:"border-top-0 border-right border-bottom-0"},"ФИО"),React.createElement("th",{width:"200px",scope:"col",className:"border-top-0 border-right border-bottom-0"},"Стоимость"),React.createElement("th",{width:"50px",scope:"col",className:"border-top-0 border-right border-bottom-0 border-right-0"},"Выполнен"))),React.createElement("tbody",null,r.map((e,t)=>React.createElement("tr",{key:t,className:0==e.exec?"table-light":2==e.exec?"table-success":1==e.exec?"table-info":"table-danger",onClick:()=>this.openOrder(e.id,e.exec,e.name,e.phone,e.email,e.description,e.descript_manager,e.date_manager)},React.createElement("td",{scope:"row",className:"border-right border-bottom-0"},e.id),React.createElement("td",{className:"border-right border-bottom-0"},e.date_order),React.createElement("td",{className:"border-right border-bottom-0"},e.name),React.createElement("td",{className:"border-right border-bottom-0"},new Intl.NumberFormat("ru-RU",{style:"currency",currency:"RUB"}).format(e.coast)),React.createElement("td",{className:"border-right border-bottom-0 border-right-0"},this.execute(e.exec))))))):React.createElement("div",null,React.createElement("div",{className:"row section-heading"},React.createElement("a",{href:"orders"},"назад")),React.createElement("div",{className:"row section-heading"},React.createElement("div",{className:"col-12 mb-3"},React.createElement("label",{htmlFor:"first_name"},React.createElement("h4",null,"Заказ №",this.state.order_id))),React.createElement("div",{className:"col-12 mb-1"},React.createElement("label",{htmlFor:"first_name"},this.state.o_name)),React.createElement("div",{className:"col-12 mb-1"},React.createElement("label",{htmlFor:"first_name"},this.state.o_phone)),React.createElement("div",{className:"col-12 mb-1"},React.createElement("label",{htmlFor:"first_name"},this.state.o_email)),React.createElement("div",{className:"col-12 mb-1",style:{display:""!=this.state.o_description?"block":"none"}},React.createElement("label",{htmlFor:"first_name"},this.state.o_description)),React.createElement("table",{className:"table"},React.createElement("thead",null,React.createElement("tr",null,React.createElement("th",{scope:"col",className:"border-top-0 border-right border-bottom-0"},"Наименование"),React.createElement("th",{width:"200px",scope:"col",className:"border-top-0 border-right border-bottom-0"},"OEM"),React.createElement("th",{width:"100px",scope:"col",className:"border-top-0 border-right border-bottom-0"},"Кол-во"),React.createElement("th",{width:"100px",scope:"col",className:"border-top-0 border-right border-bottom-0"},"Цена"),React.createElement("th",{width:"200px",scope:"col",className:"border-top-0 border-right border-bottom-0 border-right-0"},"Стоимость"))),React.createElement("tbody",null,a.map((e,t)=>React.createElement("tr",{key:t},React.createElement("td",{scope:"row",className:"border-right border-bottom-0"},e.name),React.createElement("td",{className:"border-right border-bottom-0"},e.oem),React.createElement("td",{className:"border-right border-bottom-0"},e.count),React.createElement("td",{className:"border-right border-bottom-0"},new Intl.NumberFormat("ru-RU",{style:"currency",currency:"RUB"}).format(e.price)),React.createElement("td",{className:"border-right border-bottom-0 border-right-0"},new Intl.NumberFormat("ru-RU",{style:"currency",currency:"RUB"}).format(e.sum)))))),React.createElement("div",{className:"col-12 mb-1"},React.createElement("label",{htmlFor:"first_name"}," Полная стоимость заказа ",this.AllSum())),React.createElement("div",{className:"col-12 mb-2"},this.execText(this.state.itemExec)),React.createElement("div",{className:"col-12 mb-1",style:{display:null===this.state.description_manager||""===this.state.description_manager?"none":"block"}},React.createElement("label",null,"Комментарий менеджера "),React.createElement("textarea",{rows:"3",cols:"90",className:"textField",readOnly:!0,value:null===this.state.description_manager||"null"===this.state.description_manager?"":this.state.description_manager})),React.createElement("div",{className:"col-12 mb-1",style:{display:null===this.state.date_manager?"none":"block"}},React.createElement("p",null,"Время обновления заказа ",this.date_parse(this.state.date_manager))))):React.createElement("div",null,"Загрузка...")}}ReactDOM.render(React.createElement(a,null),document.getElementById("editableField"))}});
//# sourceMappingURL=OrdersUserList.js.map