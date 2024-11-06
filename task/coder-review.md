
- [Изменить тип на tinyint(1)](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/migrations/schema.init.sql#L6)
- [В composr.json Установить зависимость "psr/http-message": "^2.0",](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/composer.json#L11)
- [Переименовать на CartAdderController](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Controller/AddToCartController.php#L13C12-L13C35)
- [Зависимости должны внедряться по  интерфейсному типу](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Controller/AddToCartController.php#L15)
- [Переименовать на add](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Controller/AddToCartController.php#L22)
- [Переименовать на CartGetterController](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Controller/GetCartController.php#L12)
- [Зависимости должны внедряться по  интерфейсному типу](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Controller/GetCartController.php#L14)
- [Переименовать на ProductsGetterController](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Controller/GetProductsController.php#L11)
- [Зависимости должны внедряться по  интерфейсному типу](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Controller/GetProductsController.php#L13)
- [Файл переместить в каталог Infrastructure (Данному не место в каталоге для контроллеров)](https://github.com/alexeyp0708/raketa_test_task/blob/task/task/src/Controller/JsonResponse.php)
- [Убрать declare(strict_types = 1)](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Domain/Cart.php#L3)
- [Создать интерфейс для класса](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Domain/Cart.php#L7)
- [Зависимости должны внедряться по интерфейсному типу](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Domain/Cart.php#L9)
- [поменять тип аргумента на интерфейс](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Domain/Cart.php#L37)
- [Написать для класса интерфейс](https://github.com/alexeyp0708/raketa_test_task/blob/task/task/src/Domain/CartItem.php)
- [Написать для класса интерфейс](https://github.com/alexeyp0708/raketa_test_task/blob/task/task/src/Domain/Customer.php)
- [Убрать declare(strict_types = 1)](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Domain/Customer.php#L3)
- [будет исключение если $this->redis->get($key) вернет данные отличные от строки.](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Infrastructure/Connector.php#L26)
- [$key должен быть типа string](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Infrastructure/Connector.php#L23)
- [Установить тип аргумента CartInterface $value  указать возвращаемый тип :void](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Infrastructure/Connector.php#L35)
- [указать тип аргумента string](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Infrastructure/Connector.php#L44)
- [ожидается bool но Redis::exists() возвращает false|int|Redis также выкидывает исключение \RedisException](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Infrastructure/Connector.php#L46)
- [Написать для класса интерфейс Унаследовать от \Exception и удалить лишние методы так как будут дублировать логику родителя.](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Infrastructure/ConnectorException.php#L7)
- [Убрать declare(strict_types = 1)](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Infrastructure/ConnectorException.php#L3)
- [Переписать под фабрику](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Infrastructure/ConnectorFacade.php#L10)
- [внедрять свойства через аргументы контролера, сделать их readonly, и свойства сделать приватными](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Infrastructure/ConnectorFacade.php#L19)
- [Переписать вод возвращаемый объект Connector.](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Infrastructure/ConnectorFacade.php#L27)
- [стоит подумать об внедрении зависимости](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Infrastructure/ConnectorFacade.php#L29)
- [пустой cath](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Infrastructure/ConnectorFacade.php#L40)
- [Переписать под изменения связаные с изменениями класса Infrastructure\ConnectorFacade](https://github.com/alexeyp0708/raketa_test_task/blob/task/task/src/Repository/CartManager.php)
- [переименовать в CartManagerRepository и создать интерфейс для класса](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/CartManager.php#L12)
- [Указать тип](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/CartManager.php#L14)
- [Вместо действующих аргументов , внедрить ConnectorInterface $connector и LoggerInterface $logger.](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/CartManager.php#L16)
- [возврат :void](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/CartManager.php#L22)
- [Аргументы местами поменять](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/CartManager.php#L33)
- [Вместо Error указать $e->getMessage()](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/CartManager.php#L35)
- [возврат типа ?CartInterface](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/CartManager.php#L42)
- [Возвращаемый тип mixed , так как Redis:: get в Connector::get возвращает mixed. Необходимо рефакторить.](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/CartManager.php#L45)
- [Вместо Error указать $e->getMessage()](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/CartManager.php#L47C13-L47C43)
- [Передача параметров не полная и не вижу смысла возвращать обьект после обработки исключения. нужно возращать null если данные не получены или выкидывать исключение как есть](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/CartManager.php#L50)
- [Убрать declare(strict_types = 1)](https://github.com/alexeyp0708/raketa_test_task/blob/task/task/src/Repository/Entity/Product.php)
- [Убрать declare(strict_types = 1](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/ProductRepository.php#L3)
- [свойства вынести в аргументы конструктора](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/ProductRepository.php#L12)
- [должен быть \Exeption](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/Repository/ProductRepository.php#L26)
  По уму если empty то нужно выводить null.
  Исключения нужны только тогда кода неожидаемое поведение или неожидаемый результат .
  В данном случае пустой результат тоже результат.
  fetchOne возвращает mixed - необходима проверка на массив.
- [Перемеиновать каталог с View на Model и классы с суфиксом Model вместо View](https://github.com/alexeyp0708/raketa_test_task/tree/task/task/src/View)
View - это метка всего что отвечает за представление (отображение). В каталоге реализована бизнес логика, поэтому уместно наименование Model
- [переименовать на unpackDataToArray](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/View/CartView.php#L17)  
  Так как в методе осуществляются запросы и структура данных меняется (lобавляется доп массив в поле items.product), то переименовать в более подходящее название. например unpackDataToArray
- [переименовать в getArrayByCategory ибо более уместное имя](https://github.com/alexeyp0708/raketa_test_task/blob/66b36eb8888f57a52dbb8fdbcbf47929c304c0f1/task/src/View/ProductsView.php#L15)

 - Написать интерфейсы под каждый класс кроме контроллеров. Внедрять зависимости через интерфейсы. Определять типы свойств объекта через интерфейсы, Принимать  аргументы в методах по интерфейсам и возвращать результат по интерфейсу. 

Основные ошибки:

1. Работа без интерфейсов/контрактов.
2. В некоторых методах объекты создаются через конструктор. Это плохая практика так как такие методы плохо тестируются. 
Такое создание объектов необходимо выносить в отдельные методы. Но не считаю это за ошибки.
3. Связность/Зацепление. Сторонние методы например как`$this->redis->get()` необходимо выносить как минимум в отдельные методы класса или 
в другой класс модуля/приложения. В коде это мною не исправлено. 
4. Уходим от иерархического расширения. Поэтому выбор или фабричные методы или горизонтальное расширение (через трейты и интерфейсы)
5. Финализация классов - круто и поддерживаю. Но возникают проблемы с тестированием. Поэтому все что зафинализировано и должно тестироваться, должны использовать интерфейсы, а реализацию выносить в трейты.  
Не исправлял так как это сугубо индивидуально и не является плохой практикой.
6. Исправление по стилистики кода в формате PHP 8.2 и Типизирование.
7. Не стал заморачиваться с doc-блоками. Исправил то что реально имеет значение.   

Исправлений и ошибок много - моэтому мог и др важные вещи упустить.

[Pull request c исправлениями](https://github.com/alexeyp0708/raketa_test_task/pull/2)