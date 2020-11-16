import { ProductOne } from './ProductOne';
export class FavorList extends React.Component {
    constructor(props) {
    super(props);
    this.state = {
      error: null,
      isLoadedP: false,
      itemsProduct:[],
      items:[],
      gridView: true,
      style: '',

    };
  }
    componentDidMount() {
        fetch("/includes/get_data.php?x=get_categ")
      .then(res => res.json())
      .then(
        (result) => {
          this.setState({
            items: result
          });
        },
        (error) => {
          this.setState({
            error
          });
        }
      )
      this.ProductLists()
  }

  ProductLists() {
    fetch(`/includes/get_data.php?x=get_favor_products`)
      .then(res => res.json())
      .then(
        (result) => {
            //console.log(result);
            if(result===-1){
                this.setState({
            isLoadedP: true,

          });
            }else{
          this.setState({
            isLoadedP: true,
            itemsProduct: result
          });
        }
        if (this.state.gridView) this.gridView();
          else this.listView()
        },
        (error) => {
          this.setState({
            isLoadedP: true,
            error
          });
        }
      )
  }

  EmptyFavor() {
      if(this.state.itemsProduct.length===0)
        return (
            <div><p>У Вас пока пусто</p></div>
        );
  }
  getCategName(categ_id)
  {
      let d="Все товары";
      this.state.items.forEach(function(item, i, arr) {
          if(item.id===categ_id) d = item.name;
        });
        return d;
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

  render() {
    //console.log(this.state.categ_id,this.state.product_id);
    //this.ProductLists(this.state.categ_id,this.state.product_id)
    const { error, isLoadedP, itemsProduct } = this.state;

    if (error) {
      return <div>Ошибка: {error.message}</div>;
    } else if (!isLoadedP) {
      return <div className="row">Загрузка...</div>
    } else {
      return (
        <div id="product-category" className="container">
          <div className="row">
          <aside id="column-left">
            </aside>
            <div id="content" className="col-sm-11">
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

                {itemsProduct.map(item => (
                  <ProductOne style={this.state.style} key={item.id} items={item} url={`/catalog/${item.id_categ}/${item.id}`} />
                ))}
                {this.EmptyFavor()}
              </div>
            </div>
          </div>

        


            {/*<div className="col-12 col-md-4 col-lg-12">
                <div className="shop_grid_product_area">
                    <div className="row">
                        <div className="col-12">
                            <div className="product-topbar d-flex align-items-center justify-content-between">
                                <div className="total-products">
                                <p><span>{itemsProduct.length}</span> товаров</p>
                                </div>
                                <div className="product-sorting d-flex">
                                        <p>Избранное</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div className="row" id="products_list">


                    {itemsProduct.map(item => (
                      <ProductOne  key={item.id} items={item} url={`/catalog/${item.id_categ}/${item.id}`} />
                    ))}
                    {this.EmptyFavor()}
                    

                    </div>

                </div>
                    </div>*/}
</div>
          
          
      );
    }
}
}
ReactDOM.render(
  <FavorList />,
  document.getElementById('data_page')
);