@extends('Components.layout')

@section('content')
    <div class="inventory-container">
        <div class="container">
            <div class="row">
                <!-- Coffee Category -->
                <div class="col-md-3">
                    <section class="inventory-category coffee-category">
                        <h2>Coffee</h2>
                        <div class="inventory-item coffee-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="espresso">-</button>
                                <span class="item-count" id="espresso-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="espresso">+</button>
                            </div>Espresso
                            
                        </div>
                        <div class="inventory-item coffee-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="latte">-</button>
                                <span class="item-count" id="latte-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="latte">+</button>
                            </div>Latte
                            
                        </div>
                        <div class="inventory-item coffee-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="cappuccino">-</button>
                                <span class="item-count" id="cappuccino-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="cappuccino">+</button>
                            </div>Cappuccino
                            
                        </div>
                        <div class="inventory-item coffee-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="americano">-</button>
                                <span class="item-count" id="americano-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="americano">+</button>
                            </div>Americano
                            
                        </div>
                        <div class="inventory-item coffee-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="macchiato">-</button>
                                <span class="item-count" id="macchiato-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="macchiato">+</button>
                            </div>Macchiato
                            
                        </div>
                    </section>
                </div>
                
                <!-- Pastries Category -->
                <div class="col-md-3">
                    <section class="inventory-category pastries-category">
                        <h2>Pastries</h2>
                        <div class="inventory-item pastries-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="croissant">-</button>
                                <span class="item-count" id="croissant-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="croissant">+</button>
                            </div>Croissant
                            
                        </div>
                        <div class="inventory-item pastries-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="muffin">-</button>
                                <span class="item-count" id="muffin-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="muffin">+</button>
                            </div>Muffin
                            
                        </div>
                        <div class="inventory-item pastries-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="donut">-</button>
                                <span class="item-count" id="donut-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="donut">+</button>
                            </div>Donut
                            
                        </div>
                        <div class="inventory-item pastries-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="scone">-</button>
                                <span class="item-count" id="scone-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="scone">+</button>
                            </div>Scone
                            
                        </div>
                        <div class="inventory-item pastries-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="cinnamon-roll">-</button>
                                <span class="item-count" id="cinnamon-roll-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="cinnamon-roll">+</button>
                            </div>Cinnamon Roll
                            
                        </div>
                    </section>
                </div>
                
                <!-- Add-Ons Category -->
                <div class="col-md-3">
                    <section class="inventory-category add-ons-category">
                        <h2>Add-Ons</h2>
                        <div class="inventory-item add-ons-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="milk">-</button>
                                <span class="item-count" id="milk-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="milk">+</button>
                            </div>Milk
                            
                        </div>
                        <div class="inventory-item add-ons-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="sugar">-</button>
                                <span class="item-count" id="sugar-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="sugar">+</button>
                            </div>Sugar
                            
                        </div>
                        <div class="inventory-item add-ons-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="vanilla-syrup">-</button>
                                <span class="item-count" id="vanilla-syrup-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="vanilla-syrup">+</button>
                            </div>Vanilla Syrup
                            
                        </div>
                        <div class="inventory-item add-ons-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="caramel-syrup">-</button>
                                <span class="item-count" id="caramel-syrup-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="caramel-syrup">+</button>
                            </div>Caramel Syrup
                            
                        </div>
                        <div class="inventory-item add-ons-item">
                           <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="whipped-cream">-</button>
                                <span class="item-count" id="whipped-cream-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="whipped-cream">+</button>
                            </div> Whipped Cream
                            
                        </div>
                    </section>
                </div>
                
                <!-- Best Sellers Category -->
                <div class="col-md-3">
                    <section class="inventory-category best-sellers-category">
                        <h2>Best Sellers</h2>
                        <div class="inventory-item best-sellers-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="mocha">-</button>
                                <span class="item-count" id="mocha-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="mocha">+</button>
                            </div>Mocha
                            
                        </div>
                        <div class="inventory-item best-sellers-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="bagel">-</button>
                                <span class="item-count" id="bagel-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="bagel">+</button>
                            </div>Bagel
                            
                        </div>
                        <div class="inventory-item best-sellers-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="apple-pie">-</button>
                                <span class="item-count" id="apple-pie-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="apple-pie">+</button>
                            </div>Apple Pie
                            
                        </div>
                        <div class="inventory-item best-sellers-item">
                             <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="flat-white">-</button>
                                <span class="item-count" id="flat-white-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="flat-white">+</button>
                            </div>Flat White
                           
                        </div>
                        <div class="inventory-item best-sellers-item">
                            <div class="button-group">
                                <button class="btn btn-secondary btn-sm decrement-btn" data-item="chocolate-croissant">-</button>
                                <span class="item-count" id="chocolate-croissant-count">0</span>
                                <button class="btn btn-primary btn-sm increment-btn" data-item="chocolate-croissant">+</button>
                            </div>Chocolate Croissant
                            
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const incrementButtons = document.querySelectorAll('.increment-btn');
            const decrementButtons = document.querySelectorAll('.decrement-btn');

            function updateCount(item, change) {
                const countElement = document.getElementById(`${item}-count`);
                let count = parseInt(countElement.textContent, 10);
                count = Math.max(count + change, 0); // Prevent negative counts
                countElement.textContent = count;
            }

            incrementButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const item = this.getAttribute('data-item');
                    updateCount(item, 1);
                });
            });

            decrementButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const item = this.getAttribute('data-item');
                    updateCount(item, -1);
                });
            });
        });
    </script>
@endsection
