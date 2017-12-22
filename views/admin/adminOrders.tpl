
<div class="container">
<h2>Заказы</h2>

{if !$rsOrders}
  Нет заказов.
    {else}

    <table  class="table table-bordered table-condensed table-hover" border="1" cellpadding="1" cellspacing="1">
        <thead>
        <tr class="info">
            <th>№</th>
            <th>Действие</th>
            <th>ID заказа</th>
            <th width="100">Статус</th>
            <th>Дата создания</th>
            <th>Дата оплаты</th>
            <th>Дополнительная информация</th>
            <th>Дата изменения заказа</th>
        </tr>
        </thead>
        {foreach $rsOrders as $item name=orders}
            <tbody>
            <tr >
                <td>{$smarty.foreach.orders.iteration}</td>
                <td>
                    <a href="#" onclick="showProducts('{$item['id']}');return false;">Показать товар заказа</a>

                </td>
                <td>{$item['id']}</td>
                <td>
                    <input type="checkbox"  class="my_checkbox" id="itemStatus_{$item['id']}"  {if $item['status']}checked="checked"  {/if} onclick="updateOrderStatus('{$item['id']}');"/>
                </td>
                <td>{$item['date_created']}</td>
                <td>
                    <input type="text" id="datePayment_{$item['id']}" value="{$item['date_payment']}"/>
                    <input  class="btn btn-primary btn-sm" type="button" value="Сохранить" onclick="updateDatePayment('{$item['id']}');"/>
                </td>
                <td>{$item['comment']}</td>
                <td>{$item['date_modification']}</td>
            </tr>


            <tr class="hideme" id="purchasesForOrderId_{$item['id']}">
                <td colspan="8">
                    {if $item['children']}
                        <table  class="table table-bordered table-condensed" border="1" cellpadding="1" cellspacing="1" width="100%">
                            <tr  class="info">
                                <th>№</th>
                                <th>ID</th>
                                <th>Название</th>
                                <th>Цена</th>
                                <th>Количество</th>
                            </tr>
                        {foreach $item['children'] as $itemChild name=products}
                            <tr >
                                <td>{$smarty.foreach.products.iteration}</td>
                                <td>{$itemChild['id']}</td>
                                <td>
                                    <a href="/product/{$itemChild['id']}/">{$itemChild['name']}</a>
                                </td>
                                <td>{$itemChild['price']}</td>
                                <td>{$itemChild['amount']}</td>
                            </tr>
                        {/foreach}
                        </table>
                    {/if}
                </td>

            </tr>
            </tbody>
        {/foreach}
    </table>
{/if}
    </div>