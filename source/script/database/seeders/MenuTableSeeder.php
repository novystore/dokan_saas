<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MenuTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $menus = array(
  array('id' => '1','user_id' => '2','name' => 'header','position' => 'header','data' => '[{"text":"Home","href":"/","target":"_self","title":""},{"text":"Shop","href":"/shop","target":"_self","title":""},{"text":"Top Products","href":"/shop","target":"_self","title":""},{"text":"Best Deal","href":"/shop","target":"_self","title":""},{"text":"Customers","href":"#","target":"_self","title":"","children":[{"text":"Login","href":"/user/login","target":"_self","title":""},{"text":"Register","href":"/user/register","target":"_self","title":""}]}]','created_at' => '2021-03-07 07:09:52','updated_at' => '2021-03-07 07:12:37'),
  array('id' => '2','user_id' => '2','name' => 'Customer Care','position' => 'left','data' => '[{"text":"Contact Us","href":"https://wa.me/+8801830617500","target":"_blank","title":""},{"text":"Support","href":"https://wa.me/+8801830617500","target":"_blank","title":""},{"text":"How to Buy","href":"https://codecanyon.net/","target":"_blank","title":""},{"text":"Offer Query","href":"https://wa.me/+8801830617500","target":"_blank","title":""}]','created_at' => '2021-03-07 07:13:07','updated_at' => '2021-03-07 07:19:45'),
  array('id' => '3','user_id' => '2','name' => 'Earn With Bigbag','position' => 'center','data' => '[{"text":"Bigbag University","href":"https://tutsplus.com/","target":"_blank","title":""},{"text":"Code of Conduct","href":"/shop","target":"_self","title":""},{"text":"Earning Policy","href":"https://wa.me/+8801830617500","target":"_blank","title":""},{"text":"Commission Policy","href":"https://wa.me/+8801830617500","target":"_blank","title":""}]','created_at' => '2021-03-07 07:20:09','updated_at' => '2021-03-07 07:23:08'),
  array('id' => '4','user_id' => '2','name' => 'Policy','position' => 'right','data' => '[{"text":"Privacy policy","href":"/page/privacy-policy/52","target":"_self","title":""},{"text":"Refund Policy","href":"/page/refund-policy/53","target":"_self","title":""},{"text":"Return Policy","href":"/page/return-policy/54\\t","target":"_self","title":""},{"text":"Shipping Policy","href":"/page/privacy-policy/52","target":"_self","title":""}]','created_at' => '2021-03-07 07:23:30','updated_at' => '2021-03-07 07:28:35'),
  array('id' => '5','user_id' => '4','name' => 'header','position' => 'header','data' => '[{"text":"Home","href":"/","target":"_self","title":""},{"text":"Desktop","href":"#","target":"_self","title":"","children":[{"text":"Special PC","href":"/category/desktop/140","target":"_self","title":""},{"text":"Gaming PC","href":"/category/desktop/140","target":"_self","title":""}]},{"text":"Laptop","href":"#","target":"_self","title":"","children":[{"text":"Apple","href":"/brand/apple/136","target":"_self","title":""},{"text":"Asus","href":"/brand/asus/138","target":"_self","title":""}]},{"text":"Gaming","href":"#","target":"_self","title":"","children":[{"text":"Gaming Console","href":"/category/gaming-console/144","target":"_self","title":""},{"text":"Accessories","href":"/category/computer-accessories/142","target":"_self","title":""}]},{"text":"Camera","href":"/category/camera/143","target":"_self","title":""},{"text":"Network","href":"/category/network/145","target":"_self","title":""}]','created_at' => '2021-03-07 11:11:18','updated_at' => '2021-03-07 11:17:55'),
  array('id' => '6','user_id' => '4','name' => 'Account','position' => 'left','data' => '[{"text":"Dashboard","href":"/user/dashboard","target":"_self","title":""},{"text":"My Orders","href":"/user/orders","target":"_self","title":""},{"text":"My Downloads","href":"/user/orders","target":"_self","title":""},{"text":"Login","href":"/user/login","target":"_self","title":""},{"text":"Register","href":"/user/register","target":"_self","title":""}]','created_at' => '2021-03-07 13:15:59','updated_at' => '2021-03-07 13:20:29'),
  array('id' => '7','user_id' => '4','name' => 'Earn With Saka Cart','position' => 'center','data' => '[{"text":"Saka University","href":"https://tutsplus.com/","target":"_self","title":""},{"text":"Code of Conduct","href":"/shop","target":"_self","title":""},{"text":"Earning Policy","href":"https://wa.me/+8801830617500","target":"_self","title":""},{"text":"Commission Policy","href":"https://wa.me/+8801830617500","target":"_self","title":""},{"text":"Latest Products","href":"/shop","target":"_self","title":""}]','created_at' => '2021-03-07 13:20:45','updated_at' => '2021-03-07 13:23:16'),
  array('id' => '8','user_id' => '4','name' => 'Policy','position' => 'right','data' => '[{"text":"Privacy Policy","href":"/page/privacy-policy/75","target":"_self","title":""},{"text":"Return Policy","href":"/page/return-policy/76","target":"_self","title":""},{"text":"Refund Policy","href":"/page/refund-policy/77","target":"_self","title":""},{"text":"Shipping Policy","href":"/page/privacy-policy/75","target":"_self","title":""}]','created_at' => '2021-03-07 13:23:35','updated_at' => '2021-03-07 13:30:26'),
  array('id' => '9','user_id' => '3','name' => 'header','position' => 'header','data' => '[{"text":"Home","href":"/","target":"_self","title":""},{"text":"Mobile Phones","href":"#","target":"_self","title":"","children":[{"text":"Samsung","href":"/brand/samsung-53/196","target":"_self","title":""},{"text":"Apple","href":"/brand/apple-51/197","target":"_self","title":""},{"text":"huawei","href":"/brand/huawei-79/198","target":"_self","title":""},{"text":"Oppo","href":"/brand/oppo/199","target":"_self","title":""},{"text":"Xiaomi","href":"/xiaomi-39/200","target":"_self","title":""}]},{"text":"Watch","href":"#","target":"_self","title":"","children":[{"text":"Apple","href":"/category/smart-watch/209","target":"_self","title":""},{"text":"Xiamoi","href":"/shop","target":"_self","title":""}]},{"text":"Hearphones","href":"#","target":"_self","title":"","children":[{"text":"Sony","href":"/shop","target":"_self","title":""},{"text":"Samsung","href":"/shop","target":"_self","title":""}]}]','created_at' => '2021-03-07 17:10:29','updated_at' => '2021-03-07 17:16:06'),
  array('id' => '10','user_id' => '3','name' => 'Customer Care','position' => 'left','data' => '[{"text":"Contact Us","href":"https://wa.me/+8801830617500","target":"_self","title":""},{"text":"Support","href":"https://wa.me/+8801830617500","target":"_self","title":""},{"text":"How to Buy","href":"https://codecanyon.net/","target":"_self","title":""},{"text":"Offer Query","href":"https://wa.me/+8801830617500","target":"_self","title":""}]','created_at' => '2021-03-07 17:17:46','updated_at' => '2021-03-07 17:18:35'),
  array('id' => '11','user_id' => '3','name' => 'Earn With arafacart','position' => 'center','data' => '[{"text":"ArafaWith Bigbag","href":"https://tutsplus.com/","target":"_self","title":""},{"text":"Code of Conduct","href":"/shop","target":"_self","title":""},{"text":"Earning Policy","href":"https://wa.me/+8801830617500","target":"_self","title":""},{"text":"Commission Policy","href":"https://wa.me/+8801830617500","target":"_self","title":""}]','created_at' => '2021-03-07 17:18:42','updated_at' => '2021-03-07 17:19:53'),
  array('id' => '12','user_id' => '3','name' => 'Policy','position' => 'right','data' => '[{"text":"Privacy policy","href":"/page/privacy-policy/94","target":"_self","title":""},{"text":"Refund Policy","href":"/page/refund-policy/95","target":"_self","title":""},{"text":"Return Policy","href":"/page/privacy-policy/94","target":"_self","title":""},{"text":"Shipping Policy","href":"/page/privacy-policy/94","target":"_self","title":""}]','created_at' => '2021-03-07 17:20:08','updated_at' => '2021-03-07 17:22:24'),
  array('id' => '13','user_id' => '5','name' => 'header','position' => 'header','data' => '[{"text":"Home","href":"/","target":"_self","title":""},{"text":"Burger","href":"#","target":"_self","title":"","children":[{"text":"Beef Burger","href":"/shop","target":"_self","title":""},{"text":"Chicken Burger","href":"/shop","target":"_self","title":""}]},{"text":"Pizza","href":"#","target":"_self","title":"","children":[{"text":"Beef Pizza","href":"/shop","target":"_self","title":""},{"text":"Chicken Pizza","href":"/shop","target":"_self","title":""}]},{"text":"Kabab","href":"#","target":"_self","title":"","children":[{"text":"Beef Kabab","href":"/shop","target":"_self","title":""},{"text":"Chicken Kabab","href":"/shop","target":"_self","title":""}]},{"text":"Salad","href":"/shop","target":"_self","title":""},{"text":"Beverage","href":"/shop","target":"_self","title":""}]','created_at' => '2021-03-08 06:36:18','updated_at' => '2021-03-08 06:38:48'),
  array('id' => '14','user_id' => '5','name' => 'Customer Care','position' => 'left','data' => '[{"text":"Contact Us","href":"https://wa.me/+8801830617500","target":"_self","title":""},{"text":"Contact Us","href":"https://wa.me/+8801830617500","target":"_blank","title":""},{"text":"Support","href":"https://wa.me/+8801830617500","target":"_blank","title":""},{"text":"How to Buy","href":"https://codecanyon.net/","target":"_self","title":""},{"text":"Offer Query","href":"https://wa.me/+8801830617500","target":"_self","title":""}]','created_at' => '2021-03-08 06:39:13','updated_at' => '2021-03-08 06:40:42'),
  array('id' => '15','user_id' => '5','name' => 'Earn With bazar','position' => 'center','data' => '[{"text":"Bazar University","href":"https://tutsplus.com/","target":"_self","title":""},{"text":"Code of Conduct","href":"/shop","target":"_self","title":""},{"text":"Earning Policy","href":"https://wa.me/+8801830617500","target":"_self","title":""},{"text":"Commission Policy","href":"https://wa.me/+8801830617500","target":"_self","title":""}]','created_at' => '2021-03-08 06:40:47','updated_at' => '2021-03-08 06:42:28'),
  array('id' => '16','user_id' => '5','name' => 'Policy','position' => 'right','data' => '[{"text":"Privacy policy","href":"/page/privacy-policy/111","target":"_self","title":""},{"text":"Refund Policy","href":"/page/privacy-policy/111","target":"_self","title":""},{"text":"Return Policy","href":"page/privacy-policy/111","target":"_self","title":""},{"text":"Shipping Policy","href":"/page/privacy-policy/111","target":"_self","title":""}]','created_at' => '2021-03-08 06:42:40','updated_at' => '2021-03-08 06:45:19')
);

\App\Menu::insert($menus);
    }
}
