!function(e){var t={};function a(c){if(t[c])return t[c].exports;var s=t[c]={i:c,l:!1,exports:{}};return e[c].call(s.exports,s,s.exports,a),s.l=!0,s.exports}a.m=e,a.c=t,a.d=function(e,t,c){a.o(e,t)||Object.defineProperty(e,t,{enumerable:!0,get:c})},a.r=function(e){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(e,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(e,"__esModule",{value:!0})},a.t=function(e,t){if(1&t&&(e=a(e)),8&t)return e;if(4&t&&"object"==typeof e&&e&&e.__esModule)return e;var c=Object.create(null);if(a.r(c),Object.defineProperty(c,"default",{enumerable:!0,value:e}),2&t&&"string"!=typeof e)for(var s in e)a.d(c,s,function(t){return e[t]}.bind(null,s));return c},a.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return a.d(t,"a",t),t},a.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},a.p="",a(a.s=35)}({11:function(e,t,a){"use strict";a.d(t,"a",(function(){return c}));class c extends React.Component{render(){return this.props.show?React.createElement("div",{className:"modal fade",id:"modalYesNo",tabIndex:"-1",role:"dialog","aria-labelledby":"modalYesNoTitle","aria-hidden":"true"},React.createElement("div",{className:"modal-dialog modal-dialog-centered",role:"document"},React.createElement("div",{className:"modal-content"},React.createElement("div",{className:"modal-header"},React.createElement("h5",{className:"modal-title",id:"exampleModalLongTitle"},this.props.title),React.createElement("button",{type:"button",className:"close","data-dismiss":"modal","aria-label":"Close"},React.createElement("span",{"aria-hidden":"true"},"×"))),React.createElement("div",{className:"modal-body"},this.props.children),React.createElement("div",{className:"modal-footer"},React.createElement("button",{type:"button",className:"btn btn-danger","data-dismiss":"modal",onClick:this.props.onYes},"Да"),React.createElement("button",{type:"button",className:"btn btn-primary","data-dismiss":"modal"},"Нет"))))):null}}},13:function(e,t,a){"use strict";a.r(t),a.d(t,"CheckOut",(function(){return c}));class c extends React.Component{constructor(e){super(e),this.state={visibleSendBtn:!0,enableSendBtn:!1,registration:!1,emptyInputVisible:!1,value_id:-1,value_name:"",value_phone:"",value_email:"",value_description:"",itemsProduct:this.props.items,orderSend:!1,orderSendData:"",user_sin_in:!1,order_id:0,emailValid:!0},console.log(this.props.items),this.handleSubmit=this.handleSubmit.bind(this)}componentDidMount(){fetch("/includes/get_data.php?x=get_user_info").then(e=>e.json()).then(e=>{this.setState({isLoaded:!0,value_id:e[0].id,value_name:e[0].name,value_phone:e[0].phone,value_email:e[0].email})},e=>{this.setState({isLoaded:!0,error:e})})}tovar(){switch(this.countProd()){case 1:return"товар";case 2:case 3:case 4:return"товара";default:return"товаров"}}countProd(){let e=0;return this.state.itemsProduct.map(t=>e+=t.count),e}setEnableSendBtn(){this.setState({enableSendBtn:!this.state.enableSendBtn})}setRegistration(){console.log("setRegistration"),this.setState({registration:!this.state.registration})}changeName(e){this.setState({value_name:e.target.value})}changePhone(e){this.setState({value_phone:e.target.value})}changeEmail(e){this.setState({value_email:e.target.value})}changeDescription(e){this.setState({value_description:e.target.value})}handleSubmit(e){let t=!1;""!==this.state.value_name&&""!==this.state.value_phone&&""!==this.state.value_email||(t=!0);let a=this.state.value_email.match(/^([\w.%+-]+)@([\w-]+\.)+([\w]{2,})$/i);a||(t=!0),this.setState({visibleSendBtn:t,emptyInputVisible:t,emailValid:a});var c=JSON.stringify(this.state.itemsProduct);if(!t){const e=new FormData;e.append("x","setorder"),e.append("id",this.state.value_id),e.append("name",this.state.value_name),e.append("phone",this.state.value_phone),e.append("email",this.state.value_email),e.append("description",this.state.value_description),e.append("registration",this.state.registration),e.append("items",c),fetch("/includes/set_data.php",{method:"POST",body:e}).then(e=>e.json()).then(e=>{-1!=e.code?(this.setState({order_id:e.code,orderSend:!0,orderSendData:e.code}),$("#count_in_favouritet").text("")):this.setState({orderSendData:e.error,visibleSendBtn:!this.state.visibleSendBtn})}).catch(e=>{console.error(e)})}e.preventDefault()}render(){let e=this.props.sum;return this.state.orderSend?React.createElement("div",{className:"row"},React.createElement("div",{className:"col-12 col-sm-6 col-md-6"},React.createElement("div",{className:"col-12 mb-3"},React.createElement("div",{class:"col-10 ml-15"},React.createElement("h4",null,"Ваш заказ №",this.state.orderSendData," отправлен"),React.createElement("p",null,"Проверте свою электронную почту"))))):React.createElement("div",{className:"row"},React.createElement("div",{className:"col-12 col-md-12 col-lg-12"},React.createElement("div",{className:"col-12 mb-3"},React.createElement("a",{onClick:this.props.onBack},"назад в корзину"))),React.createElement("div",{className:"col-12 col-md-6 col-lg-5 ml-lg-3"},React.createElement("div",{className:"order-details-confirmation"},React.createElement("div",{className:"cart-page-heading"},React.createElement("h5",null,"Ваш заказ")),React.createElement("ul",{className:"order-details-form mb-4"},React.createElement("li",null,React.createElement("span",null,this.countProd())," ",React.createElement("span",null,this.tovar())),React.createElement("li",null,React.createElement("span",null,"Итого")," ",React.createElement("span",null,e))))),React.createElement("div",{className:"col-12 col-sm-6 col-md-6"},React.createElement("h6",null,"Оформление заказа"),React.createElement("div",{className:"messages"},React.createElement("div",{style:{display:this.state.emptyInputVisible?"block":"none"},className:"error_form"},React.createElement("h4",null,"Заполните форму!"))),React.createElement("div",{className:"messages"},React.createElement("div",{style:{display:""===this.state.orderSendData?"none":"block"},className:"error_form2"},React.createElement("div",{className:"alert alert-danger",role:"alert"},this.state.orderSendData))),React.createElement("form",{className:"needs-validation",onSubmit:this.handleSubmit},React.createElement("div",{className:"col-12 mb-3 required"},React.createElement("label",{className:"control-label",htmlFor:"first_name"},"Имя Фамилия"),React.createElement("input",{type:"text",readOnly:-1!=this.state.value_id,className:"form-control",id:"first_name",name:"first_name",required:!0,value:this.state.value_name,onChange:e=>this.changeName(e)})),React.createElement("div",{className:"col-12 mb-3 required"},React.createElement("label",{className:"control-label",htmlFor:"phone_number"},"Телефон"),React.createElement("input",{type:"tel",readOnly:-1!=this.state.value_id,className:"form-control",id:"phone_number",name:"phone_number",required:!0,value:this.state.value_phone,onChange:e=>this.changePhone(e)})),React.createElement("div",{className:"col-12 mb-3 required"},React.createElement("label",{className:"control-label",htmlFor:"email_address"},"Email"),React.createElement("input",{type:"text",readOnly:-1!=this.state.value_id,className:this.state.emailValid?"form-control":"form-control is-invalid",id:"email_address",name:"email_address",required:!0,value:this.state.value_email,onChange:e=>this.changeEmail(e)})),React.createElement("div",{className:"col-12 mb-3"},React.createElement("label",{htmlFor:"description"},"Комментарий к заказу"),React.createElement("textarea",{className:"form-control",id:"description",name:"description",onChange:e=>this.changeDescription(e)})),React.createElement("div",{className:"col-12 mb-3"},React.createElement("div",{className:"custom-control custom-checkbox d-block mb-2"},React.createElement("input",{type:"checkbox",className:"custom-control-input",id:"customCheck1",onClick:()=>this.setEnableSendBtn()}),React.createElement("label",{className:"custom-control-label",htmlFor:"customCheck1"},"Я согласен на обработку персональных данных! ",React.createElement("a",{"data-toggle":"modal","data-target":"#agreementModalLong"},"Правила обработки")))),React.createElement("div",{className:"col-12 mb-3",style:{display:-1==this.state.value_id?"block":"none"}},React.createElement("div",{className:"custom-control custom-checkbox d-block mb-2"},React.createElement("input",{type:"checkbox",className:"custom-control-input",id:"customCheck2",onClick:()=>this.setRegistration()}),React.createElement("label",{className:"custom-control-label",htmlFor:"customCheck2"},"Зарегистрироваться на сайте (пароль будет отправлен по электронной почте)"))),React.createElement("input",{type:"hidden",name:"action",value:"checkout"}),React.createElement("input",{type:"hidden",name:"action",value:this.state.value_id}),React.createElement("div",{className:"col-12 mb-3"},React.createElement("button",{id:"sendOrder",disabled:!this.state.enableSendBtn,type:"submit",className:"btn essence-btn",style:{display:this.state.visibleSendBtn?"block":"none"}},"Отправить"),React.createElement("div",{id:"submit_img",style:{display:this.state.visibleSendBtn?"none":"block"}},React.createElement("img",{src:"/catalog/view/theme/zemez894/image/litt-loader.gif",width:"70",height:"70"}))))))}}},35:function(e,t,a){"use strict";a.r(t),a.d(t,"CartList",(function(){return n}));var c=a(11),s=a(13);class n extends React.Component{constructor(e){super(e),this.state={gocheckout:!1,error:null,isLoadedP:!1,itemsProduct:[],value_id:-1,user_id:-1},this.toggleModalYes=this.toggleModalYes.bind(this),this.toggleModalNo=this.toggleModalNo.bind(this),this.checkout=this.checkout.bind(this)}componentDidMount(){this.ProductLists(this.state.user_id)}ProductLists(e){fetch("/includes/get_data.php?x=get_cart_products&user_id="+e).then(e=>e.json()).then(t=>{-1===t?this.setState({user_id:e,isLoadedP:!0}):this.setState({user_id:e,isLoadedP:!0,itemsProduct:t})},e=>{this.setState({isLoadedP:!0,error:e})})}EmptyFavor(){if(0===this.state.itemsProduct.length)return React.createElement("div",null,React.createElement("p",null,"У Вас пока пусто"))}toggleModalDel(e){this.setState({isOpen:!this.state.isOpen,value_id:e})}toggleModalNo(){this.setState({isOpen:!this.state.isOpen})}toggleModalYes(){this.delCartProduct(this.state.value_id),this.setState({isOpen:!this.state.isOpen})}delCartProduct(e){fetch("/includes/set_data.php",{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:"x=delchart_product&product="+e}).then((function(e){return e.json()})).then((function(e){$("#count_in_chart").text(e)}));let t=[];this.state.itemsProduct.forEach((function(a,c,s){a.id!=e&&t.push(a)})),this.setState({itemsProduct:t})}delCart(e){fetch("/includes/set_data.php",{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:"x=delchart&product="+e}).then((function(e){return e.json()})).then((function(e){$("#count_in_chart").text(e)}))}addCart(e){fetch("/includes/set_data.php",{method:"POST",headers:{"Content-Type":"application/x-www-form-urlencoded"},body:"x=addchart&product="+e}).then((function(e){return e.json()})).then((function(e){$("#count_in_chart").text(e)}))}minusCount(e){let t=this.state.itemsProduct;t[e].count>0&&(t[e].count=t[e].count-1,this.setState({itemsProduct:t}),this.delCart(t[e].id))}plusCount(e){let t=this.state.itemsProduct;t[e].count<t[e].balance&&(t[e].count=t[e].count+1,this.setState({itemsProduct:t}),this.addCart(t[e].id))}sum(){let e=0;return this.state.itemsProduct.forEach((function(t,a,c){e+=parseFloat(t.count)*parseFloat(t.coast)})),new Intl.NumberFormat("ru-RU",{style:"currency",currency:"RUB"}).format(e)}checkout(){this.setState({gocheckout:!this.state.gocheckout})}getImage(e){return null===e?"/img/product-img/noPhoto.png":"/img/product-img/"+e.split(";")[0]}render(){const{error:e,isLoadedP:t,gocheckout:a,itemsProduct:n}=this.state;return e?React.createElement("div",null,"Ошибка: ",e.message):t?a?React.createElement(s.CheckOut,{items:n,sum:this.sum(),onBack:this.checkout}):React.createElement("div",null,React.createElement("div",{className:"button_cart"},React.createElement("p",{align:"right"},React.createElement("button",{style:{display:n.length>0?"block":"none",marginRight:20},className:"btn essence-btn",onClick:()=>this.checkout()},"оформить"))),React.createElement("table",{className:"table"},React.createElement("thead",null,React.createElement("tr",null,React.createElement("th",{width:"100px",scope:"col",className:"border-top-0 border-right border-bottom-0"},"Изображение"),React.createElement("th",{scope:"col",className:"border-top-0 border-right border-bottom-0"},"Название"),React.createElement("th",{width:"200px",scope:"col",className:"border-top-0 border-right border-bottom-0"},"Артикул"),React.createElement("th",{width:"100px",scope:"col",className:"border-top-0 border-right border-bottom-0"},"Кол-во"),React.createElement("th",{width:"70px",scope:"col",className:"border-top-0 border-right border-bottom-0"},"Цена"),React.createElement("th",{width:"70px",scope:"col",className:"border-top-0 border-right border-bottom-0"},"Стоимость"),React.createElement("th",{width:"70px",scope:"col",className:"border-top-0 border-right border-bottom-0"}))),React.createElement("tbody",null,n.map((e,t)=>React.createElement("tr",{key:t},React.createElement("td",{scope:"row",className:"border-right border-bottom-0"},React.createElement("img",{width:"100px",src:this.getImage(e.img),alt:""})),React.createElement("td",{className:"border-right border-bottom-0"},React.createElement("a",{href:`/catalog/${e.id_categ}/${e.id}`},e.name)),React.createElement("td",{className:"border-right border-bottom-0"},e.art),React.createElement("td",{className:"border-right border-bottom-0"},React.createElement("i",{className:"icon-minus plus-minus",onClick:()=>this.minusCount(t)})," ",e.count," ",React.createElement("i",{className:"icon-plus plus-minus",onClick:()=>this.plusCount(t)})),React.createElement("td",{className:"border-right border-bottom-0"},new Intl.NumberFormat("ru-RU",{style:"currency",currency:"RUB"}).format(e.coast)),React.createElement("td",{className:"border-right border-bottom-0"},new Intl.NumberFormat("ru-RU",{style:"currency",currency:"RUB"}).format(e.coast*e.count)),React.createElement("td",{className:"border-right border-bottom-0 border-right-0"},React.createElement("button",{onClick:()=>this.toggleModalDel(e.id),className:"btn edit-btn-icon-red","data-toggle":"modal","data-target":"#modalYesNo"},React.createElement("i",{className:"icon-trash-empty"}))))),React.createElement("tr",null,React.createElement("th",{scope:"row",colSpan:"5"},"Итого"),React.createElement("th",null,this.sum())))),this.EmptyFavor(),React.createElement(c.a,{show:!0,onYes:this.toggleModalYes,onNo:this.toggleModalNo,title:"Предупреждение"},"Вы желаете удалить товар?")):React.createElement("div",{className:"row"},"Загрузка...")}}ReactDOM.render(React.createElement(n,null),document.getElementById("data_page"))}});
//# sourceMappingURL=CartList.js.map