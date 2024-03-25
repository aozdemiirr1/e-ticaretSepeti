<div>
    <h1>Sepet</h1>
    <ul>
        @foreach ($sepet as $urun )

        <li>
            {{ $urun->name }} - {{ $urun->price }}
            <p>Adet {{ $urun->qty }}</p>
            <button wire:click="arttir({{ $urun->id }})">Arttır</button>
            <button wire:click="azalt({{ $urun->id }})">Azalt</button>
            <button wire:click="cikar({{ $urun->id }})">Çıkar</button>
        </li>
        @endforeach
    </ul>
    <form wire:submit.prevent="ekle">
        <input type="text" name="name" wire:model="name" placeholder="Ürün Adı">
        <input type="number" name="price" wire:model="price" placeholder="Fiyat">
        <button type="submit">Sepete Ekle</button>
    </form>
</div>
