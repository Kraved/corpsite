<div class="footer">
    <div class="card exchange-rate" style="width: 20rem;">
        <div class="card-body">
            <h4 class="card-title exchange-rate__title">Таблица обменных курсов</h4>
            <table class="table table-bordered table-hover exchange-rate__table">
            	<thead>
            		<tr>
            			<th>Валюта</th>
            			<th>Ставка</th>
            		</tr>
            	</thead>
            	<tbody>
            		<tr>
            			<td><img src="{{ asset('images/usa.png') }}" alt="usa">Доллар</td>
            			<td>{{ $exchangeRate['dollar'] }}</td>
            		</tr>
                    <tr>
            			<td><img src="{{ asset('images/eu.png') }}" alt="eu">Евро</td>
            			<td>{{ $exchangeRate['euro'] }}</td>
            		</tr>
            	</tbody>
            </table>
            <p class="card-text">Курсы валют в RUB на {{ $exchangeRate['date'] }}</p>
        </div>
    </div>
</div>
