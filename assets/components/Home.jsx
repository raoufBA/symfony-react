import React, { Component } from 'react';
import { Route, Switch, Redirect, Link, withRouter } from "react-router-dom";
import Freelancers from './Freelancers';
import Companies from './Companies'

class Home extends Component {
    render() {
        return (
            <div>
                <nav className="navbar navbar-expand-lg navbar-light bg-light">
                    <Link className={"navbar-brand"} to={"/"}>
                        <img src="http://bnbjob.plateformeduweb.com/themes/custom/bnbjob/images/logos/logo.svg" alt="Accueil" className="img-fluid d-inline-block align-top" />
                    </Link>
                    <div className="collapse navbar-collapse" id="navbarText">
                        <ul className="navbar-nav mr-auto">
                            <li className="nav-item">
                                <Link className={"nav-link"} to={"/freelancers"}> Freelancer </Link>
                            </li>

                            <li className="nav-item">
                                <Link className={"nav-link"} to={"/companies"}> Companies </Link>
                            </li>
                        </ul>
                    </div>
                </nav>
                <main>
                    <Switch>
                        <Redirect exact from="/" to="/freelancers" />
                        <Route path="/freelancers" component={Freelancers} />
                        <Route path="/companies" component={Companies} />
                    </Switch>
                </main>
                <footer className="pt-4 my-md-5 pt-md-5 border-top">
                    <div className="row">
                        <div className="col-12 col-md">
                            <img className="mb-2" src="http://bnbjob.plateformeduweb.com/sites/default/files/inline-images/logo_foot.png" alt="" width="24" height="19" />
                            <small className="d-block mb-3 text-muted">&copy; 2021–2022</small>
                        </div>
                        <div className="col-6 col-md">
                            <h5>Features</h5>
                            <ul className="list-unstyled text-small">
                                <li><a className="link-secondary" href="#">Cool stuff</a></li>
                                <li><a className="link-secondary" href="#">Random feature</a></li>
                                <li><a className="link-secondary" href="#">Team feature</a></li>
                                <li><a className="link-secondary" href="#">Stuff for developers</a></li>
                                <li><a className="link-secondary" href="#">Another one</a></li>
                                <li><a className="link-secondary" href="#">Last time</a></li>
                            </ul>
                        </div>
                        <div className="col-6 col-md">
                            <h5>Resources</h5>
                            <ul className="list-unstyled text-small">
                                <li><a className="link-secondary" href="#">Resource</a></li>
                                <li><a className="link-secondary" href="#">Resource name</a></li>
                                <li><a className="link-secondary" href="#">Another resource</a></li>
                                <li><a className="link-secondary" href="#">Final resource</a></li>
                            </ul>
                        </div>
                        <div className="col-6 col-md">
                            <h5>About</h5>
                            <ul className="list-unstyled text-small">
                                <li><a className="link-secondary" href="#">Team</a></li>
                                <li><a className="link-secondary" href="#">Locations</a></li>
                                <li><a className="link-secondary" href="#">Privacy</a></li>
                                <li><a className="link-secondary" href="#">Terms</a></li>
                            </ul>
                        </div>
                    </div>
                </footer>
            </div>
        )
    }
}

export default Home;
