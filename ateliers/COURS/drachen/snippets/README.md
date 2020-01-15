:flower_playing_cards: ##Carte HTML pour postcard/show :flower_playing_cards:

```html

<!-- HTML de la méthode show -->
<div class="container">
  <div class="row">
    <div class="col-md-4 offset-md-4">
      <div class="card card-image" style="background: url(https://picsum.photos/seed/picsum/200/300) no-repeat top center; background-size: cover;">
        <!-- Content -->
        <div class="text-white text-center d-flex align-items-center justify-content-center rgba-black-strong py-5 px-4">
          <h3 class="card-title pt-2 text-center"><strong><?php echo $this->data["content"] ?></strong></h3>
        </div>
      </div>
    </div>
  </div>
</div>