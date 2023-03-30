import { Component, OnInit } from '@angular/core';
import { MoviesService } from '../services/movies.service';

@Component({
  selector: 'app-landing',
  templateUrl: './landing.component.html',
  styleUrls: ['./landing.component.css']
})
export class LandingComponent implements OnInit{
  movies: any = [];
  genre: any = [];

  constructor(
    private _http: MoviesService
  ){}

  ngOnInit() :void {
    this.getLatestMovies();
  }

  getLatestMovies() {

    this._http.getMovies(2)
              .subscribe(res => {
                console.log(res);
                this.movies = res;
                console.log('movies: ', this.movies);
              })
  }

}
