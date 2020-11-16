export class ChangePwd extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            error: null,
            user_id: this.props.id,
            value_p1: this.props.pwd,
            value_p2: '',
            value_p3: '',
            changeOk: false,
            executing: false

        };
        this.handleSubmit = this.handleSubmit.bind(this);
    }
    changeP2(e) {
        this.setState({ value_p2: e.target.value })
    }
    changeP3(e) {
        this.setState({ value_p3: e.target.value })
    }
    handleSubmit(event) {
        //console.log('sendOrderClick')


        if (this.state.value_p2 === this.state.value_p3 && this.state.value_p2 != '') {
            if (this.state.value_p2.length >= 8) {
                this.setState({
                    executing: !this.state.executing
                });

                const formData = new FormData()
                formData.append('x', 'setchangepwd')
                formData.append('id', this.state.user_id)
                formData.append('p1', this.state.value_p1)
                formData.append('p2', this.state.value_p2)

                fetch('/includes/set_data.php', {
                    method: 'POST',
                    body: formData
                })
                    .then(response => response.json())
                    .then(data => {
                        if (data.code != -1) {
                            this.setState({
                                changeOk: true
                            });
                        } else {
                            this.setState({
                                error: data.error,
                                executing: !this.state.executing
                            });
                        }
                    })
                    .catch(error => {
                        console.error(error)
                    })
            } else {
                this.setState({ error: 'Пароль не может быть короче 8 символов!' })
            }
        } else {
            this.setState({
                error: "Не правильно повторили пароль!",

            });
        }
        event.preventDefault();
    }



    render() {

        if (this.state.changeOk) {
            return (
            
                <div className="row">
                <div className="col-12 col-sm-6 col-md-6">
                    <div className="col-12 mb-3">
                        <div class="col-10 ml-15">
                                <h4>Вы успешно поменяли пароль.</h4>
                                <p>
                                <a href='/'>Перейти в каталог</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            );
        } else {
            return (

                



                    
                    <div className="col-sm-12">
                        <div className="messages">
                            <div style={{ display: this.state.emptyInputVisible ? 'block' : 'none' }} className="error_form">
                                <h4>Заполните форму!</h4>
                            </div>
                        </div>
                        <div className="messages">
                            <div style={{ display: (this.state.error != null) ? 'block' : 'none' }} className="error_form2">
                                <div className="alert alert-danger" role="alert">
                                    {this.state.error}
                                </div>
                            </div>
                        </div>

                                <form className="needs-validation form-horizontal" onSubmit={this.handleSubmit}>


                                <fieldset>
                                <legend>Пароль</legend>
                                <div className="form-group required">
                                    <label className="col-sm-2 control-label" htmlFor="second_password">Новый пароль</label>
                                    <div className="col-sm-10">
                                    <input type="password"  className="form-control" id="second_password" name="second_password" required onChange={(e) => this.changeP2(e)} />
                                    </div>
                                </div>
                                <div className="form-group required">
                                    <label className="col-sm-2 control-label" htmlFor="third_password">Повторите пароль</label>
                                    <div className="col-sm-10">
                                    <input type="password" className="form-control" id="third_password" name="third_password" required onChange={(e) => this.changeP3(e)} />
                                    </div>
                                </div>
                            </fieldset>


                                   {/* <div className="col-12 mb-3">
                                        <label htmlFor="second_password">Новый пароль</label>
                                        <input type="password" style={{ width: '200px' }} className="form-control" id="second_password" name="second_password" required onChange={(e) => this.changeP2(e)} />
                                    </div>
                                    <div className="col-12 mb-3">
                                        <label htmlFor="third_password">Повторите новый пароль</label>
                                        <input type="password" style={{ width: '200px' }} className="form-control" id="third_password" name="third_password" required onChange={(e) => this.changeP3(e)} />
            </div>*/}

                                    <div className="col-12 mb-3">
                                        <button id="sendOrder" type="submit" className="btn essence-btn"
                                            style={{ display: !this.state.executing ? 'block' : 'none' }}>Сменить</button>
                                        <div id="submit_img" style={{ display: !this.state.executing ? 'none' : 'block' }}>
                                            <img src="/catalog/view/theme/zemez894/image/litt-loader.gif" width="70" height="70" />
                                        </div>

                                    </div>
                                </form>
                            </div>

      
                  


            );
        }
    }

}
//declare pwd;
ReactDOM.render(<ChangePwd id={id} pwd={pwd} />, document.getElementById('data_page'));