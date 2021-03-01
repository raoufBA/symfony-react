import React, { Component } from 'react';
import axios from 'axios';

class Companies extends Component {
    state = {
        companies: [],
        loading: true
    }

    componentDidMount() {
        this.getCompanies();
    }

    getCompanies() {
        axios.get(`http://localhost:8000/api/companies`).then(res => {
            const companies = res.data.slice(0, 15);
            this.setState({ companies, loading: false })
        })
    }
    render() {
        const loading = this.state.loading;
        return (<div>
            <section className="py-5 text-center container">
                <div className="row py-lg-5">
                    <div className="col-lg-6 col-md-8 mx-auto">
                        <h1 className="fw-light">Album example</h1>
                        <p className="lead text-muted">Something short and leading about the collection below—its contents, the creator, etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
                        <p>
                            <a href="#" className="btn btn-primary my-2">Main call to action</a>
                            <a href="#" className="btn btn-secondary my-2">Secondary action</a>
                        </p>
                    </div>
                </div>
            </section>

            <div className="album py-5 bg-light">
                <div className="container">

                    <div className="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                        {this.state.companies.map(company =>

                            <div className="col" key={company.id}>
                                <div className="card shadow-sm">
                                    <img className="rounded-circle" src={company.imageURL} />

                                    <div className="card-body">
                                        <h4>{company.name}</h4>
                                        <p className="card-text">{company.description}</p>
                                        <div className="d-flex justify-content-between align-items-center">
                                            <div className="btn-group">
                                                <button type="button" className="btn btn-sm btn-outline-secondary">View</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        )}
                    </div>
                </div>
            </div>
        </div>
        )
    }
}

export default Companies
