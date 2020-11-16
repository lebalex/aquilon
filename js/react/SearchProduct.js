import { ProductOne } from './ProductOne';
export class SearchProduct extends React.Component {
    constructor(props) {
    super(props);
    this.state = {
      error: null,
      isLoadedP: false,
      itemsProduct:[],
      search_string:this.props.search_string,
      gridView: true,
      style: '',


    };
  }
    componentDidMount() {
      if(this.state.search_string!=''){
        fetch(`/includes/get_data.php?x=get_search&search_string=${this.state.search_string}`)
      .then(res => res.json())
      .then(
        (result) => {
          //console.log(result);
          this.setState({
            itemsProduct: result,
            isLoadedP: true,
          });
          if (this.state.gridView) this.gridView();
          else this.listView()
        },
        (error) => {
          this.setState({
            error,
            isLoadedP: true,
          });
        }
      )
      }else{
        this.setState({
          isLoadedP: true,
        });
      }

  }



  EmptySearch() {
      if(this.state.itemsProduct.length===0)
        return (
            <div><p>Ничего не найдено</p></div>
        );
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

    const { error, isLoadedP, itemsProduct } = this.state;

    if (error) {
      return <div>Ошибка: {error.message}</div>;
    } else if (!isLoadedP) {
      return <div className="row">Загрузка...</div>
    } else {
      return (


            <div className="col-12 col-sm-12 col-md-4 col-lg-12">

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
                {this.EmptySearch()}
              </div>
            </div>
          </div>
</div>
          
          
      );
    }
}
}
ReactDOM.render(
  <SearchProduct search_string={search_string}/>,
  document.getElementById('data_page')
);