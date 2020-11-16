import { Carousel } from 'react-responsive-carousel';
import "../../css/carousel.css";

export class ProductDetail extends React.Component {
  constructor(props) {
    super(props);
    this.state = {
      isFavouritet: (this.props.items.active === 'active') ? true : false
    };
  }

  AddChart(product_id) {
    $('#button-cart').button('loading');
    const requestOptions = {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: 'x=addchart&product=' + product_id
    };
    fetch('/includes/set_data.php', requestOptions)
      .then(function (response) {
        return response.json();
      }).then(function (data) {
        //console.log('AddChart:', data);
        $('#cart-total3').text(data);
        $('#button-cart').button('reset');
      });
  }

  addFavouritet(product_id) {

    const requestOptions = {
      method: 'POST',
      headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
      body: 'x=addFavouritet&product=' + product_id
    };
    fetch('/includes/set_data.php', requestOptions)
      .then(res => res.json())
      .then(
        (result) => {
          //console.log(result.add);
          //console.log(result.count);
          $('#wishlist-total3').text(result.count);
          this.setState({ isFavouritet: (result.add === -1) ? false : true });

        },
        (error) => {

        }
      )
  }
  getImage(img) {
    if (img === null) return '/img/product-img/noPhoto.png';
    else {
      return '/img/product-img/' + img.split(';')[0];
    }
  }
  parseImg(imgs) {
    if (imgs != null) {
      let arrayOfImgs = imgs.split(';');
      return arrayOfImgs;
    } else {
      return imgs;
    }
  }



  render() {

    let item = this.props.items
    //console.log(item);
    //$('#title_page').text(this.props.categ_name+'/'+item.name);

    return (
      <div id="product-category" className="container">

        <ul className="breadcrumb">
          <li><a href="/"><i className="fa fa-home"></i></a></li>
          <li><a href={`/catalog/${this.props.id_categ}`}>{this.props.categ_name}</a></li>
          <li><span>{item.name}</span></li>
        </ul>

        <div className="row">


          <div id="content" className="col-sm-12">


            <div className="row">



              <div className="col-sm-6 col-lg-7 product_page-left">
                <div className="product-gallery">

                  <div className="row">
                    <div className="col-lg-12 pull-right hidden-xs hidden-sm hidden-md text-center">
                      {/*<img width="800" height="800" id="productZoom" 
                 src="https://livedemo00-opencart.template-help.com/opencart_prod-23526/image/cache/catalog/products/product-34-518x500.png" 
      data-zoom-image="https://livedemo00-opencart.template-help.com/opencart_prod-23526/image/cache/catalog/products/product-34-800x800.png"></img>*/}
                      {(item.img != null && item.img != '') ?
                        <Carousel showArrows={false} showStatus={false}>

                          {(item.img != null && item.img != '') ? this.parseImg(item.img).map((it, index) => (

                            <div>
                              <img width="800" src={`/img/product-img/${it}`} alt="" />
                            </div>
                          )) : ''}


                        </Carousel> : <img width="800" src={this.getImage(item.img)} alt="" />}


                      <div className="cart-button">
                        <button type="button" className="btn-icon" data-toggle="tooltip" title="" onClick={() => this.addFavouritet(item.id)} data-original-title="В избранное">
                          <i className={(this.state.isFavouritet) ? 'material-icons-favorite' : 'material-icons-favorite_border'}></i></button>

                      </div>
                    </div>


                  </div>

                </div>
              </div>



              <div className="col-sm-6 col-lg-5 product_page-right">
                <div className="general_info product-info">
                  <h2 className="product-title">{item.name}</h2>

                  <ul className="list-unstyled product-section">


                    <li>
                      <strong>Артикул: </strong>
                      <span>{item.art}</span>
                    </li>


                    <li>
                      <strong>Остатки: </strong>
                      <span className="stock">{(item.count != null & item.count > 0) ? item.count : 'под заказ'}</span>
                    </li>
                  </ul>

                </div>
                <div id="product">




                              
                  {/*<div className="form-group form-horizontal">
                    <div className="form-group">
                      <div className="col-sm-12">
                        <div className="quantity">
                          <label className="control-label" for="input-quantity">Кол-во</label>
                          <a className="counter counter-minus fa fa-caret-down" href="#"></a>
                                <input type="text" name="quantity" value="1" size="2" id="input-quantity" className="form-control" />
                                <a className="counter counter-plus fa fa-caret-up" href="#"></a>
                        </div>
                      </div>
                    </div>
                    </div>*/}

                  <div className="price-section">

                    {/*<span className="price-old">$1,000.00</span>*/}

                    <span className="price-new">{(item.coast != null & item.coast > 0) ? new Intl.NumberFormat('ru-RU', { style: 'currency', currency: 'RUB', }).format(item.coast) : 'Цена по запросу'}</span>

                    <div className="reward-block">


                    </div>
                  </div>



                  <button type="button" id="button-cart" data-loading-text="Loading..." className="btn-primary" onClick={() => this.AddChart(item.id)}>
                    <i className="material-icons-add_shopping_cart"></i><span>в корзину</span></button>


                </div>
              </div>
            </div>


          </div>
        </div>


        {/*<div className="col-12 col-md-4 col-lg-12">
                <div className="shop_grid_product_area">
                    <div className="row">
                        <div className="col-12">
                            <div className="product-topbar d-flex align-items-center justify-content-between">
                                <div className="total-products">
                                <p>{item.name}</p>
                                </div>
                                <div className="product-sorting d-flex">
                                <a href='/catalog' className='nav-link-span scroll'>
                                <span>Каталог</span>
                                </a><span className="nav-link-span">/</span>
                                <a href={`/catalog/${this.props.id_categ}`} className='nav-link-span scroll'>
                                <span>{this.props.categ_name}</span>
                                </a>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div className="row" id="products_list">
            <div className="col-12 col-sm-6 col-lg-4">
                            <div className="single-product-wrapper">
                                <div className="product-img">
                                    <img src={this.getImage(item.img)} alt=""/>
                                    <div className="product-favourite">
                                        <a onClick={() => this.addFavouritet( item.id )}  className={`favme ${(this.state.isFavouritet)?'active':''} fa fa-heart`}></a>
                                    </div>
                                </div>
                                <div className="product-description">
                                    <div className="hover-content">
                                        <div className="add-to-cart-btn">
                                        <button onClick={() => this.AddChart( item.id )} className="btn essence-btn">В корзину</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="col-12 col-sm-6 col-lg-4">
                            <div className="single-product-wrapper">

                                <div className="product-description">
                                <h6>{item.name}</h6>
                                {item.description}
                                    <p className="color">OEM: {item.oem}</p>
                                    <p className="color">Остаток: {item.count}</p>
                                    <p className="price">{new Intl.NumberFormat('ru-RU', {style: 'currency',currency: 'RUB',}).format(item.coast)}</p>
                                </div>
                            </div>
                        </div>

            </div>
        </div>
                </div>*/}

      </div>


    );
  }

}