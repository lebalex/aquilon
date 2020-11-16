import { ModalYesNo } from './ModalYesNo';
export class ProductsManagerList extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      error: null,
      isLoaded: false,
      items: [],
      itemsProduct: [],
      value_id: -1,
      value_file: null,
      categ_id: 0,
      categ_selected: [],
      value_select: Product,
      search_string: '',
      showDeleted: false,
      value_categ_name:'', 
      editCateg:false, 
      value_categ_id:-1,
      value_categ_del_id:-1,
      messageText:'',
      
    };
    this.toggleModalYes = this.toggleModalYes.bind(this);
    this.saveCateg = this.saveCateg.bind(this);
    this.save = this.save.bind(this);
  }
  componentDidMount() {
    fetch("/includes/get_data.php?x=get_categ_parent")
      .then(res => res.json())
      .then(
        (result) => {
          this.setState({
            items: result,
            isLoaded: true,
          });

        },
        (error) => {
          this.setState({
            error
          });
        }
      )


  }
  loadCateg(c, categ_name, deleted) {
    fetch(`/includes/get_data.php?x=get_categ_parent&categ_id=${c}&deleted=${deleted}`)
      .then(res => res.json())
      .then(
        (result) => {
          //console.log(result);
          var categ = this.state.categ_selected;
          
          if(c===-1)categ.splice(0);
          if(c!=-1 && categ_name!=0)categ.push([c, categ_name]);




          //console.log(categ);
          this.setState({
            isLoaded: true,
            categ_selected: categ,
            items: result,
            categ_id: c
          });
          if(c!=-1)this.loadDate(c)
        },
        (error) => {
          this.setState({
            error
          });
        }
      )
  }
  loadCategBack(c, idx) {
    fetch(`/includes/get_data.php?x=get_categ_parent&categ_id=${c}&deleted=${this.state.showDeleted}`)
      .then(res => res.json())
      .then(
        (result) => {
          //console.log(result);
          var categ = this.state.categ_selected;
          categ.splice(idx + 1);
          //console.log(categ);
          this.setState({
            isLoaded: true,
            categ_selected: categ,
            items: result,
            categ_id: c
          });
          this.loadDate(c)
        },
        (error) => {
          this.setState({
            error
          });
        }
      )
  }
  loadDate(c) {
    //console.log(c);
    fetch(`/includes/get_data.php?x=get_all_products_db&categ_id=${c}&deleted=${this.state.showDeleted}`)
      .then(res => res.json())
      .then(
        (result) => {
          //console.log(result);
          this.setState({
            isLoaded: true,
            itemsProduct: result
          });
        },
        (error) => {
          this.setState({
            isLoaded: true,
            error
          });
        }
      )
  }
  onShowDeleted(e) {
    this.setState({ showDeleted: !this.state.showDeleted });
    this.loadCateg(-1, 0, !this.state.showDeleted)
  }
  search() {
    //console.log(this.state.search_string);
    this.setState({
      isLoaded: false
    });
    fetch(`/includes/get_data.php?x=get_search&search_string=${this.state.search_string}&deleted=${this.state.showDeleted}`)
      .then(res => res.json())
      .then(
        (result) => {
          //console.log(result);
          this.setState({
            itemsProduct: result,
            isLoaded: true,
            items:[]
          });
        },
        (error) => {
          this.setState({
            error,
            isLoaded: true,
          });
        }
      )

  }
  searchClear() {
    this.setState({
      isLoaded: false,
      search_string: ''
    });
    this.loadCateg(-1,0, this.state.showDeleted)
  }
  editCateg(id, name) {
    //console.log(id, name);
    this.setState({value_categ_name:name, editCateg:true, value_categ_id:id })
  }
  changeNameCateg(e)
  {
    //console.log(e.target.value);
    this.setState({value_categ_name:e.target.value})
  }
  saveCateg(event)
  {
    console.log(this.state.categ_id, this.state.value_categ_name, this.state.value_categ_id);
    const fileField = this.state.value_file
    const formData = new FormData()
        formData.append('x', 'editcateg')
        formData.append('id', this.state.value_categ_id)
        formData.append('parent_id', this.state.categ_id)
        formData.append('name', this.state.value_categ_name)

fetch('/includes/set_data.php', {
method: 'POST',
body: formData
})
.then(response => response.text())
.then(data => {
  if(data!=-1)
        console.log(data)
        this.loadCateg(this.state.categ_id, 0, this.state.showDeleted)
})
.catch(error => {
console.error(error)
})
$('.modal').modal('hide');
$("#file_val").val('');

    event.preventDefault();
  }


  edit(index) {
    let tmp = new Product();
    if (index != -1) {
      tmp = this.state.itemsProduct[index];
      tmp.imgs = this.state.itemsProduct[index].img;
    }
    if (tmp.description === null)
      tmp.description = '';
    this.setState({ value_select: tmp })
  }
  save(event) {
    //console.log(this.state.value_select.imgs)
    const fileField = this.state.value_file
    const formData = new FormData()
    formData.append('x', 'editproduct')
    formData.append('id_categ', this.state.categ_id)
    formData.append('id', this.state.value_select.id)
    formData.append('name', this.state.value_select.name)
    formData.append('art', this.state.value_select.art)
    formData.append('count', this.state.value_select.count)
    formData.append('coast', this.state.value_select.coast)
    formData.append('description', this.state.value_select.description)
    formData.append('imgs', this.state.value_select.imgs)
    if (fileField != undefined) formData.append('img', fileField[0])

    //console.log(this.state.value_select);
    fetch('/includes/set_data.php', {
      method: 'POST',
      body: formData
    })
      .then(response => response.text())
      .then(data => {
        //console.log(data)
        if (data != -1)
          console.log(data)
        if (this.state.search_string != '')
          this.search();
        else
          this.loadDate(this.state.categ_id)
      })
      .catch(error => {
        console.error(error)
      })
    this.setState({ value_select: Product })
    $('.modal').modal('hide');
    $("#file_val").val('');
    event.preventDefault();
  }
  delCateg(id) {
    console.log(id)
        const formData = new FormData()
            formData.append('x', 'delcateg')
            formData.append('id', id)
  fetch('/includes/set_data.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.text())
  .then(data => {
      //if(data!=-1)
            console.log(data)
    this.loadCateg(this.state.categ_id, 0, this.state.showDeleted)
  })
  .catch(error => {
    console.error(error)
  })
  }

  del(id) {
    //console.log(id)
    const formData = new FormData()
    formData.append('x', 'delproduct')
    formData.append('id', id)
    fetch('/includes/set_data.php', {
      method: 'POST',
      body: formData
    })
      .then(response => response.text())
      .then(data => {
        //console.log(data)
        if (data != -1)
          console.log(data)
        this.loadCateg(this.state.categ_id, 0, this.state.showDeleted)
      })
      .catch(error => {
        console.error(error)
      })
  }

  /*changeCateg(e) {
    this.loadDate(e.target.value, this.state.showDeleted)
  }*/
  changeName(e) {
    let tmp = new Product();
    tmp = this.state.value_select;
    tmp.name = e.target.value
    this.setState({ value_select: tmp })
  }
  changeArt(e) {
    let tmp = new Product();
    tmp = this.state.value_select;
    tmp.art = e.target.value
    this.setState({ value_select: tmp })
  }
  changeCount(e) {
    let tmp = new Product();
    tmp = this.state.value_select;
    tmp.count = e.target.value
    this.setState({ value_select: tmp })
  }
  changeCoast(e) {
    let tmp = new Product();
    tmp = this.state.value_select;
    tmp.coast = e.target.value
    this.setState({ value_select: tmp })
  }
  changeDescription(e) {
    let tmp = new Product();
    tmp = this.state.value_select;
    tmp.description = e.target.value
    this.setState({ value_select: tmp })
  }
  changeImg(e) {
    this.setState({ value_file: e.target.files })

    /**/
  }
  changeSearch(e) {
    this.setState({ search_string: e.target.value })
  }
  onEnterPress(event) {
    //console.log(this.state.search_string);
    //console.log(event.key);
    if (event.key === 'Enter') {
      this.search()
    }
  }
  toggleModalCategDel(item)
  {
    let message = 'Вы желаете восстановить товар?';
    if(item.active===1)
      message = 'Вы желаете удалить товар?';
    this.setState({
      messageText:message,
      value_categ_del_id: item.id,
      value_id: -1
    });
  }
  toggleModalDel(item) {
    let message = 'Вы желаете восстановить товар?';
    if(item.active===1)
      message = 'Вы желаете удалить товар?';
    this.setState({
      messageText:message,
      value_id: item.id,
      value_categ_del_id:-1
    });
  }

  toggleModalYes() {
    //console.log(this.state.value_id);
    if(this.state.value_id!=-1)
      this.del(this.state.value_id)
      else
        this.delCateg(this.state.value_categ_del_id)
  }
  parseImg(imgs) {
    if (imgs != null) {
      let arrayOfImgs = imgs.split(';');
      return arrayOfImgs;
    } else {
      return imgs;
    }
  }
  delImg(index) {
    let imgs = this.parseImg(this.state.value_select.imgs);
    var removed = imgs.splice(index, 1);
    //console.log(removed);
    //console.log(this.state.value_select.img);
    let tmp = new Product();
    tmp = this.state.value_select;
    tmp.imgs = imgs.join(';')
    this.setState({ value_select: tmp })
    //console.log(tmp.img);
    //console.log(tmp.imgs);
  }

  render() {
    const { error, isLoaded, items, itemsProduct } = this.state;
    let messageText = '';
    (this.state.showDeleted) ? messageText = 'Вы желаете восстановить товар?' : messageText = 'Вы желаете удалить товар?';
    if (error) {
      return <div>Ошибка: {error.message}</div>;
    } else if (!isLoaded) {
      return <div>Загрузка...</div>;
    } else {
      return (
        <div>
          <div class="row">
            <div className="col-12">
              <div class="custom-control custom-checkbox">
                <input type="checkbox" className="custom-control-input" id="customShowDeleted" checked={this.state.showDeleted}
                  onChange={(e) => this.onShowDeleted(e)} />
                <label className="custom-control-label" htmlFor="customShowDeleted">Показать удаленный товар</label>
              </div>
            </div>

            <div id="search" class="search2 pull-left">
                <input class="search2" name="search" placeholder="поиск по наименованию" style={{ width: '300px;' }} value={this.state.search_string}
                  onChange={(e) => this.changeSearch(e)} onKeyPress={event => this.onEnterPress(event)} />
                <button type="button" className="button-search" onClick={() => this.searchClear()}><i class="fa fa-times"></i></button>
                <button type="button" className="button-search" onClick={() => this.search()}>Поиск</button>
              </div>


 
 </div>
 

          <div className="row">
            <button onClick={() => this.editCateg(-1,'')} className="btn edit-btn" data-toggle="modal" data-target=".bd-edit-modal-categ-lg">
              <i className="icon-plus" />добавить категорию</button>&nbsp;
              <button onClick={() => this.edit(-1)} className="btn edit-btn" data-toggle="modal" data-target=".bd-edit-modal-lg">
              <i className="icon-plus" />добавить товар</button>
          </div>

          <div className="row">
            <ul className="breadcrumb">
              <li><a href="#" onClick={() => this.loadCategBack(0, -1)}><i className="fa fa-home"></i></a></li>
              {this.state.categ_selected.map((item, index) => (
                <li key={item[0]}>
                  <a href="#" onClick={() => this.loadCategBack(item[0], index)}>{item[1]}</a>
                </li>
              ))}
            </ul>
          </div>


          {(items.length > 0) ? <table className="table" >
            <thead>
              <tr>
                <th scope="col" className="border-top-0 border-right border-bottom-0">Название</th>
                <th width="200px" scope="col" className="border-top-0 border-right border-bottom-0 border-right-0"></th>
              </tr>
            </thead>
            <tbody>

              {items.map((item, index) => (
                <tr key={index}>
                  <td scope="row" className="border-right border-bottom-0"><a href="#" onClick={() => this.loadCateg(item.id, item.name, this.state.showDeleted)}><h4>{item.name}</h4></a></td>
                  <td className="border-right border-bottom-0 border-right-0">
                    <button style={{ display: (item.active===0) ? 'none' : '' }} onClick={() => this.editCateg(item.id, item.name)} data-toggle="modal" data-target=".bd-edit-modal-categ-lg" className="btn edit-btn-icon"><i className="icon-pencil" /></button>
                    <button onClick={() => this.toggleModalCategDel(item)} className={(item.active===0) ? "btn edit-btn-icon" : "btn edit-btn-icon-red"} data-toggle="modal" data-target="#modalYesNo"><i className="icon-trash-empty" /></button>
                  </td>
                </tr>
              ))}
            </tbody>
          </table> : ''}


          {(itemsProduct.length > 0) ? <table className="table" >
            <thead>
              <tr>
                <th scope="col" className="border-top-0 border-right border-bottom-0">Название</th>
                <th width="200px" scope="col" className="border-top-0 border-right border-bottom-0">Артикул</th>
                <th width="70px" scope="col" className="border-top-0 border-right border-bottom-0">Остаток</th>
                <th width="70px" scope="col" className="border-top-0 border-right border-bottom-0">Цена</th>
                <th width="100px" scope="col" className="border-top-0 border-right border-bottom-0">Изображение</th>
                <th width="200px" scope="col" className="border-top-0 border-right border-bottom-0 border-right-0"></th>
              </tr>
            </thead>
            <tbody>
              {itemsProduct.map((item, index) => (
                <tr key={index}>
                  <td scope="row" className="border-right border-bottom-0">{item.name}</td>
                  <td className="border-right border-bottom-0">{item.art}</td>
                  <td className="border-right border-bottom-0">{item.count}</td>
                  <td className="border-right border-bottom-0">{item.coast}</td>
                  <td className="border-right border-bottom-0">
                    <img width="100px" src={(this.parseImg(item.img) != null && item.img != '') ? `/img/product-img/${this.parseImg(item.img)[0]}` : '/img/product-img/noPhoto.png'} alt="" />
                  </td>
                  <td className="border-right border-bottom-0 border-right-0">
                    <button style={{ display: (item.active===0) ? 'none' : '' }} onClick={() => this.edit(index)} data-toggle="modal" data-target=".bd-edit-modal-lg" className="btn edit-btn-icon"><i className="icon-pencil" /></button>
                    <button onClick={() => this.toggleModalDel(item)} className={(item.active===0) ? "btn edit-btn-icon" : "btn edit-btn-icon-red"} data-toggle="modal" data-target="#modalYesNo"><i className="icon-trash-empty" /></button>
                  </td>
                </tr>
              ))}
            </tbody>
          </table> : ''}

          <div className="modal fade bd-edit-modal-categ-lg" tabIndex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div className="modal-dialog modal-lg">
              <div className="modal-content">
                <div className="modal-header">
                  <h5 className="modal-title" id="exampleModalLongTitle">Добавить (изменить) категорию</h5>
                  <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form className="needs-validation" onSubmit={this.saveCateg}>
                  <div className="modal-body">

                    <div className="form-group">
                      <label htmlFor="name_categ">Наименование</label>
                      <input type="text" name="name_categ" id="name_categ" className="form-control" value={this.state.value_categ_name} onChange={(e) => this.changeNameCateg(e)} required
                        placeholder="Наименование" />
                    </div>
                    {/*<div className="form-group"><label>Изображение</label><input type="file" id="file_val" className="form-control" onChange={(e) => this.changeImg(e)}
                      placeholder="Изображение" /></div>*/}

                  </div>
                  <div className="modal-footer">
                    <button type="button" className="btn btn-primary" type="submit">Сохранить</button>
                    <button type="button" className="btn btn-secondary" data-dismiss="modal">Отмена</button>
                  </div>
                </form>
              </div>
            </div>
          </div>


          <div className="modal fade bd-edit-modal-lg" tabIndex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div className="modal-dialog modal-lg">
              <div className="modal-content">
                <div className="modal-header">
                  <h5 className="modal-title" id="exampleModalLongTitle">Добавить (изменить) товар</h5>
                  <button type="button" className="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <form className="needs-validation" onSubmit={this.save}>
                  <div className="modal-body">

                    <div className="form-group">
                      <label htmlFor="name_prod">Наименование</label>
                      <input type="text" name="name_prod" id="name_prod" className="form-control" value={this.state.value_select.name} onChange={(e) => this.changeName(e)} required
                        placeholder="Наименование" />
                    </div>

                    <div className="form-group">
                      <label htmlFor="oem_prod">Артикул</label>
                      <input type="text" name="oem_prod" id="oem_prod" className="form-control" value={this.state.value_select.art} onChange={(e) => this.changeArt(e)} required
                        placeholder="oem" />
                    </div>
                    <div className="form-group">
                      <label htmlFor="count_prod">Остаток</label>
                      <input type="number" name="count_prod" id="count_prod" className="form-control" value={this.state.value_select.count} onChange={(e) => this.changeCount(e)} required
                        placeholder="остаток" />
                    </div>
                    <div className="form-group">
                      <label htmlFor="coast_prod">Цена</label>
                      <input type="number" name="coast_prod" id="coast_prod" className="form-control" value={(this.state.value_select.coast === null) ? 0 : this.state.value_select.coast} onChange={(e) => this.changeCoast(e)} required
                        placeholder="цена" />
                    </div>
                    <div className="form-group">

                      {(this.state.value_select.imgs != null && this.state.value_select.imgs != '') ? this.parseImg(this.state.value_select.imgs).map((item, index) => (

                        <>
                          <img width="100px" src={`/img/product-img/${item}`} alt="" />
                          <a onClick={(e) => this.delImg(index)} title="удалить"><i className="icon-trash-empty icon-trash-empty-down" /></a>
                        </>
                      )) : ''}
                    </div>
                    <label htmlFor="email_address">Описание</label>
                    <textarea rows="5" cols="90" className="form-control" onChange={(e) => this.changeDescription(e)} value={this.state.value_select.description} ></textarea>
                    <div className="form-group"><label>Добавить изображение</label><input type="file" id="file_val" className="form-control" onChange={(e) => this.changeImg(e)}
                      placeholder="Изображение" /></div>

                  </div>
                  <div className="modal-footer">
                    <button type="button" className="btn btn-primary" type="submit">Сохранить</button>
                    <button type="button" className="btn btn-secondary" data-dismiss="modal">Отмена</button>
                  </div>
                </form>
              </div>
            </div>
          </div>



          <ModalYesNo show={true}
            onYes={this.toggleModalYes}
            onNo={this.toggleModalNo} title="Предупреждение">
            {this.state.messageText}
          </ModalYesNo>





        </div>
      );
    }
  }

}

class Product {
  static id;
  static name;
  static art;
  static count;
  static coast;
  static img;
  static imgs;
  static description;
  constructor() {
    this.id = -1;
    this.name = '';
    this.art = '';
    this.description = '';
    this.count = 0;
    this.coast = 0;
    this.imgs = '';
  }

}
ReactDOM.render(<ProductsManagerList />, document.getElementById('editableField'));