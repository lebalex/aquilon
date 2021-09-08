export class ProductOne extends React.Component {
    constructor(props) {
    super(props);
    this.state = {
      isFavouritet: (this.props.items.active==='active')?true:false
    };
  }

AddChart(product_id) {

      const requestOptions = {
          method: 'POST',
          headers: {'Content-Type':'application/x-www-form-urlencoded'}, 
          body: 'x=addchart&product='+product_id
        };
    fetch('/includes/set_data.php', requestOptions)
      .then(function(response) {
      return response.json();
      }).then(function(data) {
        //console.log('AddChart:', data);
        $('#cart-total3').text(data);
      });
}

addFavouritet(product_id) {

    const requestOptions = {
    method: 'POST',
    headers: {'Content-Type':'application/x-www-form-urlencoded'}, 
    body: 'x=addFavouritet&product='+product_id
    };
  fetch('/includes/set_data.php', requestOptions)
  .then(res => res.json())
      .then(
        (result) => {
          //console.log(result.add);
          //console.log(result.count);
          $('#wishlist-total3').text(result.count);
          this.setState({isFavouritet:(result.add===-1)?false:true});

        },
        (error) => {

        }
      )
}
getImage(img)
{
if(img===null) return '/img/product-img/noPhoto.png';
else 
{
  return '/img/product-img/'+img.split(';')[0];
}
}
getImage2(img)
{
if(img===null) return '/img/product-img/noPhoto.png';
else 
{
  if(img.split(';').length>1 )return '/img/product-img/'+img.split(';')[1];else return '/img/product-img/'+img.split(';')[0];
}
}

  
  render() {

    let item = this.props.items
    //console.log(item);
    //"product-layout product-list"
let style = this.props.style;

      return (
        <div className={style}>
                    <div className="product-thumb transition  options ">
                    

                        <div className="image">
                            <a href={this.props.url}   onClick={this.props.onClickProduct}>
                                <img width="270" height="270" alt={item.name} title={item.name} 
                                 className="imgprimary" src={this.getImage(item.img)} />
                                <img width="270" height="270" alt={item.name} title={item.name} 
                                className="hover-img" src={this.getImage2(item.img)} />
                            </a>
                         

                        </div>

                        <div className="caption">
                            <div className="name"><a href={this.props.url}   onClick={this.props.onClickProduct}  >
                                        {item.name}
                                    </a></div>
                                    <div className="name">
                                        {item.art}
                                    </div>
                            <p className="price">
                                <span>{(item.coast!=null & item.coast>0)?new Intl.NumberFormat('ru-RU', {style: 'currency',currency: 'RUB',}).format(item.coast):'Цена по запросу'}</span>
                            </p>


                        </div>

                        <button type="button" className="btn-primary" onClick={() => this.AddChart( item.id )}>
                          <i className="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                        <div className="cart-button">
                            <button type="button" className="product-btn" onClick={() => this.addFavouritet( item.id )}>
                              <i className={(this.state.isFavouritet)?'material-icons-favorite':'material-icons-favorite_border'}></i><span>в избранное</span></button>
                        </div>

                        <div className="aside">
                            <div className="name"><a href={this.props.url}   onClick={this.props.onClickProduct}  >
                                        {item.name}
                                    </a></div>
                                    <div className="name">
                                        {item.art}
                                    </div>

                            <p className="description">{item.description}</p>
                            <p className="price">
                                {(item.coast!=null & item.coast>0)?new Intl.NumberFormat('ru-RU', {style: 'currency',currency: 'RUB',}).format(item.coast):'Цена по запросу'}
                            </p>
                            <button className="btn-primary" type="button" onClick={() => this.AddChart( item.id )}><i className="material-icons-add_shopping_cart"></i><span>в корзину</span></button>
                            <div className="clear"></div>
                            <button className="product-btn" type="button" onClick={() => this.addFavouritet( item.id )}><i className={(this.state.isFavouritet)?'material-icons-favorite':'material-icons-favorite_border'}></i><span>в избранное</span></button>
                        </div>

                    </div>
                    <div className="clear"></div>
                

{/*
            <div className="col-12 col-sm-6 col-lg-4" key={item.id}>
                            <div className="single-product-wrapper">
                                <div className="product-img">
                                <a href={this.props.url}  onClick={this.props.onClickProduct}  >
                                    <img src={this.getImage(item.img)} alt=""/></a>
                                    <div className="product-favourite">
                                        <a onClick={() => this.addFavouritet( item.id )}  className={`favme ${(this.state.isFavouritet)?'active':''} fa fa-heart`}></a>
                                    </div>
                                </div>
                                <div className="product-description">
                                    <a href={this.props.url}  onClick={this.props.onClickProduct}  >
                                        <h6>{item.name}</h6>
                                    </a>
                                    <p className="color">OEM: {item.oem}</p>
                                    <p className="price">{new Intl.NumberFormat('ru-RU', {style: 'currency',currency: 'RUB',}).format(item.coast)}</p>
                                    <div className="hover-content">
                                        <div className="add-to-cart-btn">
                                        <button onClick={() => this.AddChart( item.id )} className="btn essence-btn">В корзину</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
*/}
</div>
      );
    }

}