<div class="page page-invoice" data-ng-controller="invoiceCtrl">

    <div class="invoice-wrapper">
        <section class="invoice-container" id="invoice">
            
            <div class="invoice-inner">
                <div class="row">
                    <div class="col-xs-6">
                        <p class="size-h2">@{{main.brand}}</p>
                        <p class="text-muted">Responsive Admin App</p>
                    </div>
                    <div class="col-xs-6 text-right">
                        <p class="size-h2">INVOICE NO. #523423401</p>
                        <p>1st May 2014</p>                
                    </div>
                </div>

                <hr>

                <div class="row">
                    <div class="col-xs-6">
                        @{{main.name}} <br>
                        1234 Durfee Ave, El Monte CA, 91732 <br>
                        (626) 123-4567 <br>
                        mail@site.com

                    </div>
                    <div class="col-xs-6 text-right">
                        <p><strong>Order Details:</strong></p>
                        <strong>Date:</strong> 1st May 2014 <br>
                        <strong>ID:</strong> 1357995 <br>
                    </div>            
                </div>

                <div class="divider divider-lg"></div>

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr class="bg-dark">
                            <th class="text-center">#</th>
                            <th>Product</th>
                            <th class="text-center">Unit Cost</th>
                            <th class="text-center">Quantity</th>
                            <th class="text-center">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td>Product One</td>
                            <td class="text-center">100</td>
                            <td class="text-center">1</td>
                            <td class="text-center">100</td>
                        </tr>
                        <tr>
                            <td class="text-center">2</td>
                            <td>Product Two</td>
                            <td class="text-center">550</td>
                            <td class="text-center">2</td>
                            <td class="text-center">1100</td>
                        </tr>
                        <tr>
                            <td class="text-center">3</td>
                            <td>Product Three</td>
                            <td class="text-center">320</td>
                            <td class="text-center">2</td>
                            <td class="text-center">640</td>
                        </tr>
                        <tr>
                            <td class="text-center">4</td>
                            <td>Product Four</td>
                            <td class="text-center">80</td>
                            <td class="text-center">5</td>
                            <td class="text-center">400</td>
                        </tr>
                        <tr>
                            <td class="text-center">5</td>
                            <td>Product Five</td>
                            <td class="text-center">90</td>
                            <td class="text-center">4</td>
                            <td class="text-center">360</td>
                        </tr>
                        <tr>
                            <td class="text-center">6</td>
                            <td>Product Six</td>
                            <td class="text-center">35</td>
                            <td class="text-center">4</td>
                            <td class="text-center">140</td>
                        </tr>
                    </tbody>
                </table>

                <div class="row">
                    <div class="col-xs-8">
                        <p class="size-h3">Thanks for your business</p>
                        <ul>
                            <li>Aeserunt tenetur cum nihil repudiandae perferendis fuga vitae corporis!</li>
                            <li>Laborum, necessitatibus recusandae ullam at iusto dolore.</li>
                            <li>Voluptatum aperiam voluptates quasi!</li>
                            <li>Assumenda, iusto, consequuntur corporis atque culpa saepe magnam recusandae</li>
                            <li>Possimus odio ipsam magni sint reiciendis unde amet</li>
                        </ul>
                    </div>
                    <div class="col-xs-4 invoice-sum text-right">
                        <ul class="list-unstyled">
                            <li>Sub - Total amount: $ 2740</li>
                            <li>Discount: -----</li>
                            <li>Tax (12%): #300</li>
                            <li><strong>Grand Total: $ 3040</strong></li>
                        </ul>
                    </div>            
                </div>
            </div>
        </section>

        <section class="text-center no-print">
            <a href="" ng-click="printInvoice()" class="btn btn-primary btn-lg btn-w-lg"><i class="fa fa-print"></i> Print</a>
        </section>
    </div>
</div>