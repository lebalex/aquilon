import { ProductDetail } from './ProductDetail';
import { ProductOne } from './ProductOne';
import { Helmet } from "react-helmet";

export class CatalogList extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      error: null,
      isLoadedP: false,
      items: [],
      itemsProduct: [],
      arrayProd: [],
      categ_id: this.props.categ_id,
      product_id: this.props.product_id,
      gridView: true,
      countPhoto: 9,
      step: 9,
      style: '',

    };
  }
  componentDidMount() {
    fetch("/includes/get_data.php?x=get_categ")
      .then(res => res.json())
      .then(
        (result) => {
          //console.log(result);
          this.setState({
            //categ_id: result[0].id,
            items: result,
            isLoadedP: true,
          });
          this.ProductLists(this.state.categ_id, this.state.product_id)
        },
        // Примечание: важно обрабатывать ошибки именно здесь, а не в блоке catch(),
        // чтобы не перехватывать исключения из ошибок в самих компонентах.
        (error) => {
          this.setState({
            error
          });
        }
      )
    window.addEventListener('scroll', this.handleScroll.bind(this));
  }

  ProductLists(c, p) {
    //console.log(c, p)
    let url = `/includes/get_data.php?x=get_all_products&categ_id=${c}&product=${p}`;
    if (c === '-1' && p === '-1')
      url = '/includes/get_data.php?x=get_top_products';
    fetch(url)
      .then(res => res.json())
      .then(
        (result) => {

          //console.log(result)
          let count = (result.length > this.state.step) ? this.state.countPhoto : result.length;
          if (count > result.length) count = result.length;
          let arrayProd = result.slice(0);
          arrayProd.splice(count);

          //console.log(result);
          //console.log(arrayProd);


          this.setState({
            categ_id: c,
            product_id: p,
            isLoadedP: true,
            itemsProduct: result,
            arrayProd: arrayProd
          });
          if (this.state.gridView) this.gridView();
          else this.listView()
          //$('.total-products').html('<p><span>'+result.length+'</span> товаров</p>');
          //console.log(totalproducts);
        },
        // Примечание: важно обрабатывать ошибки именно здесь, а не в блоке catch(),
        // чтобы не перехватывать исключения из ошибок в самих компонентах.
        (error) => {
          this.setState({
            isLoadedP: true,
            error
          });
        }
      )
  }



  ChangCateg(c) {
    //console.log(c);
    this.ProductLists(c, -1)
  }
  clickProduct(p) {
    this.ProductLists(this.state.categ_id, p)
  }
  gridView() {
    var cols = $('#column-right, #column-left').length;
    let style = 'product-layout product-grid col-lg-6 col-md-6 col-sm-6 col-xs-12';
    $(this).addClass('active');
    $('#list-view').removeClass('active');
    if (cols == 2) {
      style = 'product-layout product-grid col-lg-6 col-md-6 col-sm-6 col-xs-12';
    } else if (cols == 1) {
      style = 'product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-12';
    } else {
      style = 'product-layout product-grid col-lg-3 col-md-3 col-sm-3 col-xs-12';
    }
    $('#content .product-list').attr('class', style);
    this.setState({ gridView: true, style: style });
  }
  listView() {
    $('#content .product-grid > .clearfix').remove();
    $(this).addClass('active');
    $('#grid-view').removeClass('active');
    let style = 'product-layout product-list col-xs-12';
    $('#content .product-grid').attr('class', style);
    this.setState({ gridView: false, style: style });
  }


  getCategName(categ_id) {
    //console.log(categ_id);
    //console.log(this.state.items);

    let d = "Популярные товары";
    this.state.items.forEach(function (item, i, arr) {
      if (item.children != null) {
        item.children.forEach(function (item_c1, i, arr) {
          //console.log(item_c1.id);
          if (item_c1.children != null) {
            item_c1.children.forEach(function (item_c2, i, arr) {
              //console.log(item_c2.id);
              if (item_c2.id === parseInt(categ_id)) d = item_c2.name;

            })
          } else {
            if (item_c1.id === parseInt(categ_id)) d = item_c1.name;

          }
        })
      } else {
        if (item.id === parseInt(categ_id)) d = item.name;

      }

    });
    return d;
  }
  /*ListProd() {
    let items = this.state.itemsProduct;
    let count = (items.length > this.state.step) ? this.state.countPhoto : items.length;
    if (count > items.length) count = items.length;

    var LIST = [];
    for (var i = 0; i < count; i++) {
      LIST.push(<ProductOne key={items[i].id} style={this.state.style} items={items[i]}  onClickProduct={() => this.clickProduct(items[i].id)} />);
      
    }
    return LIST;

  }*/
  handleScroll(event) {
    let scrollTop = event.srcElement.body.scrollTop;
    let winTop = window.pageYOffset;
    let winHeight = window.innerHeight;
    let docHeight = window.document.body.offsetHeight;

    if ((winTop / (docHeight - winHeight)) > 0.85) {
      if (this.state.itemsProduct.length > this.state.countPhoto) {

        let countPhoto = this.state.countPhoto + this.state.step;
        let count = (this.state.itemsProduct.length > this.state.step) ? countPhoto : this.state.itemsProduct.length;
        if (count > this.state.itemsProduct.length) count = this.state.itemsProduct.length;


        let arrayProd = this.state.itemsProduct.slice(0);
        arrayProd.splice(count);

        this.setState({
          countPhoto: countPhoto,
          arrayProd: arrayProd
        });
      }
    }
  }
  childrenLi(element) {
    let LIST = [];
    element.forEach(element2 => {
      LIST.push(<li><a href="#" href_m={`/catalog/${element2.id}`} onClick={() => this.ChangCateg(element2.id)}>{element2.name}</a></li>);
    })
    return LIST;
  }
  createLi(item) {
    var LIST = [];
    LIST.push(<li><div className="box-heading"><h3>{item.name}</h3></div></li>);
    item.children.forEach(element => {
      if (element.children != null) {
        LIST.push(<li className="sf-with-mega">
          <a href="#"><span>{element.name}</span></a>
          <ul className="sf-mega" style={{ backgroundImage: "url(/img/menu-bg-887x420.jpg)" }}>
            <li className="sf-mega_row">
              <div className="sf-mega_section">
                <ul>
                  {this.childrenLi(element.children)}
                </ul></div></li></ul></li>);

      } else {
        LIST.push(<li><a href="#" href_m={`/catalog/${element.id}`} onClick={() => this.ChangCateg(element.id)}>{element.name}</a></li>);
      }
    });
    return LIST;
  }


  render() {

    const { error, isLoadedP, items, itemsProduct, arrayProd } = this.state;


    if (error) {
      return <div>Ошибка: {error.message}</div>;
    } else if (!isLoadedP) {
      return <div className="row">Загрузка...</div>
    } else if (this.state.product_id != -1) {
      return <div className="row">
        {
          <ProductDetail items={itemsProduct[0]} id_categ={itemsProduct[0].id_categ} categ_name={this.getCategName(itemsProduct[0].id_categ)} />
        }
      </div>
    } else {
      return (
        <div id="product-category" className="container">

          <ul className="breadcrumb">
            <li><a href="/"><i className="fa fa-home"></i></a></li>
            <li><span>{this.getCategName(this.state.categ_id)}</span></li>

          </ul>

          <div className="row">
            <aside id="column-left" className="col-sm-3">
              <div className="box megamenu">


                <ul className="sf-menu">

                  {items.map(item => (
                    this.createLi(item)

                  ))}



                </ul>
              </div>

            </aside>

            <div id="content" className="col-sm-9">

              <div className="product-filter clearfix">
                <div className="product-filter_elem">
                  <div className="button-view">
                    <button type="button" id="grid-view" onClick={() => this.gridView()} className={this.state.gridView ? 'active' : ''} title="Сетка"><i className="material-icons-apps"></i></button>
                    <button type="button" id="list-view" onClick={() => this.listView()} className={!this.state.gridView ? 'active' : ''} title="Список"><i className="material-icons-storage"></i></button>
                  </div>
                </div>

              </div>
              {/** товары*/}
              <div className="row">

                {arrayProd.map(item => (
                  <ProductOne style={this.state.style} key={item.id} items={item} onClickProduct={() => this.clickProduct(item.id)} />
                ))}



              </div>
            </div>
          </div>
          <Helmet>
          <script src={`/js/superfish.js?${Math.random()}`} type="text/javascript"></script>
          <script src={`/js/sfmenu.js?${Math.random()}`} type="text/javascript" />
          <script src={`/js/jquery.rd-navbar.js?${Math.random()}`} type="text/javascript"></script>
          </Helmet>
        </div>
      );
    }
  }
}
ReactDOM.render(<CatalogList categ_id={categ_id} product_id={product_id} />, document.getElementById('product-category-lebalex'));