<div class="m-3">
    <div class="card text-white bg-danger mb-3" style="max-width: 22rem;">
        <div class="card-header">{{$location["name"]}}, {{$location["region"]}}, {{$location["country"]}}  
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col">{{$current["temp_c"]}}&deg;C</div>
                <div class="col">{{$current["temp_f"]}}&deg;F</div>
                <div class="col">{{$current["condition"]["text"]}}</div>
            </div>
            <div class="row">
                <div class="col">{{$current["last_updated"]}}</div>
                
            </div>
            
        </div>
        
    </div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
   <!--  hello from weather component-->
</div>