-- Получить все данные из табл offices
SELECT * FROM offices

-- получить city, target, SALES из таблицы offices
SELECT city, target, SALES
FROM offices;

--получить office region sales из таблицы offices
SELECT office, region, sales 
FROM offices;

-- получить номера заказов, производителей и сумму заказов из табл заказов
SELECT order_num, mfr, amount 
FROM orders;

-- получить имена, возраст и день найма у работников из таблицы salesreps
SELECT name, age, hire_date 
FROM salesreps;

-- получить список офисов, которые расположены в восточном регионе, с планами продаж и фактическими продажами 
SELECT city, region, target, sales
FROM offices
WHERE region = 'Eastern';

-- получить список покупателей, включая номер, номер менеджера и кредитный лимит, где лимит равен 65000
SELECT cust_num, cust_rep, credit_limit 
FROM customers 
WHERE credit_limit = 65000;

-- получить имя, план продаж и факт продаж служащего  с номером 103
SELECT name, quota, sales
FROM salesreps
WHERE empl_num = 103;

-- получить имя, план продаж и факт продаж служащих, у которых номер менеджера = 104
SELECT name, quota, sales
FROM salesreps
WHERE manager = 104;

-- получить среднее значение фактических продаж по всем сотрудникам компании
SELECT AVG(SALES)
FROM salesreps;

-- получить список имен и дат приема на работу служащих, у которых факт продажи больше 20000
SELECT name, hire_date
FROM salesreps
WHERE sales > 200000;

-- получить имена, возраст, дату найма, продажи у работников, которые перевыполнили план
SELECT name, age, hire_date, sales
FROM salesreps
WHERE sales > quota;

-- получить офис, города, регион и сумм, на которые бы перевыполнен или недовыполнен план по продажам
SELECT office, city, region, (sales - target)
FROM offices;

-- получить номера сотрудников, имена, возраст и вычислить сколько лет осталось до пенсии(65)
SELECT empl_num, name, age, (65 - age)
FROM salesreps;

-- получите идентификатор продукта, описание и суммарную стоимость по каждому товару 
SELECT product_id, description, (price * qty_on_hand)
FROM products;

-- получить план продаж из табл salesreps без повторений
SELECT DISTINCT quota
FROM salesreps;

-- получить имена, фактический план продаж и план продаж + 5%
SELECT name, quota, (quota + (quota * 0.05))
FROM salesreps;

SELECT name, quota, (quota * 1.05)
FROM salesreps

--------------- добавляем строки при выводе ------------------
-- получить список объемов продаж для каждого города
SELECT 'В городе', city, 'продажи', sales
FROM offices;

-- найти имена работников, которые приняты на работу до '2010-01-01'
SELECT name 
FROM salesreps 
WHERE hire_date <= '2010-01-01';

-- получить список офисов, где фактические продажи были менее 80% от плана
SELECT city, sales, target
FROM offices
WHERE sales < (0.8 * target);

-- получить список офисов, менеджером которых не является менеджер с номером 108
-- 1 вариант
SELECT city, mgr 
FROM offices 
WHERE mgr != 108;
-- 2 вариант
SELECT city, mgr 
FROM offices
WHERE mgr <> 108;

-- получить номера заказов, дату заказа, количество и стоимость по заказам,
-- которые совершены за последний квартал 2007
SELECT order_num, order_date, qty, amount
FROM orders
WHERE order_date BETWEEN '2007-10-01' AND '2007-12-31';

-- получитьномера покупателей, компанию, кредитный лимит всех покупателей где кредитный лимит между 40000 и 60000
SELECT cust_num, company, credit_limit
FROM customers
WHERE credit_limit BETWEEN 40000 AND 60000;


SELECT ORDER_NUM, AMOUNT
FROM orders
WHERE AMOUNT BETWEEN 20000 AND 29999;

-- получение значений, которые НЕ входят в диапазон
-- получить список работников, у которых факт. продажи менее 80% либо более 120%
SELECT name, sales, quota
FROM salesreps
WHERE sales NOT BETWEEN (0.8 * quota) AND (1.2 * quota);

-- A BETWEEN B AND C
-- (A >= B) AND (A <= C)


-- получить сотрудников из офисов
-- New York - 11, Chicago - 12, Los Angeles - 21

SELECT NAME, REP_OFFICE, SALES
FROM salesreps
WHERE REP_OFFICE IN (11, 12, 21);

-- получите номера заказов, даты заказов, количество и стоимость заказов которые сделаны 2007-12-17 или 2007-10-12 или 2007-12-27
SELECT order_num, order_date, amount, qty
FROM orders
WHERE order_date IN ('2007-12-17','2007-10-12','2007-12-27');

-- получите номера заказов, даты заказов, количество и стоимость заказов которые обслуживали сотрудники (Sue Smith, Bill Adams, Larry Fitch)
SELECT order_num, order_date, amount, qty
FROM orders
WHERE rep IN (102, 105, 108);


-- получите номера заказов, даты заказов, количество и стоимость заказов которые не обслуживали сотрудники (Sue Smith, Bill Adams, Larry Fitch)
SELECT order_num, order_date, amount, qty
FROM orders
WHERE rep NOT IN (102, 105, 108);

-- получить имя компании, кредитный лимит для компании 'Smithson Corp.'
SELECT COMPANY, CREDIT_LIMIT
FROM customers
WHERE COMPANY = 'Smithson Corp.';


-- поиск по шаблону, оператор LIKE
SELECT COMPANY, CREDIT_LIMIT
FROM customers
WHERE COMPANY LIKE 'Smithson CORP%';


-- найти все заказы, сделанные в 2007г
-- получить столбики с номером заказа, датой и стоимостью
SELECT order_num, order_date, qty, amount
FROM orders
WHERE order_date LIKE ("2007%");


-- подстановочный символ '_'
-- Smiths_n Corp%
SELECT company, credit_limit
FROM customers
WHERE company LIKE 'Smiths_n Corp%';


-- найти товары, коды которых начинаются с букв 'A%CD'
SELECT city, region
FROM offices
WHERE city LIKE 'A$%CD%' ESCAPE '$';


-- получить имена сотрудников, у которых нет руководителя
SELECT Name
FROM salesreps
WHERE manager IS NULL;


-- получить имена сотрудников, у которых есть руководитель
SELECT Name
FROM salesreps
WHERE manager IS NOT NULL;


-- AND OR NOT
SELECT name, quota, sales
FROM salesreps
WHERE sales < quota
    OR sales < 30000;


-- получить города, регионы, продажи из табл офисов
SELECT city, region, sales
FROM offices
ORDER BY sales DESC;



---------------------------
-- многотабличные запросы
---------------------------


-- запросы к двум таблицам
---------------------------

-- получить номер, город, регион офисов а также имя и возраст руководителей этих офисов
SELECT office, city, region, name, age
FROM offices, salesreps
WHERE mgr = empl_num;

-- получить идентификатор, имя, возраст, должность сотрудников, 
-- а также город офиса, в котором они работают и регион этого офиса
SELECT empl_num, name, age, title, city, region
FROM offices, salesreps
WHERE rep_office = office;

-- получить идентификатор клиента, название клиентов, 
-- а также имя, возраст, должность закрепленных за ними сотрудников
SELECT cust_num, company, name, age, title
FROM customers, salesreps
WHERE cust_rep = empl_num;

-- получить номер, дату, стоимость заказов, а также названия клиентов, которые их оформили
SELECT order_num, order_date, amount, company
FROM orders, customers
WHERE cust = cust_num;


-- запросы к трем таблицам
---------------------------

-- получить номер, дату, стоимость заказов, 
-- а также названия клиентов, которые их оформили
-- и имя, должность сотрудников, которые эти заказы сопровождали
SELECT order_num, order_date, amount, company, name, title
FROM orders, customers, salesreps
WHERE 
cust = cust_num
    AND
rep = empl_num;


-- запросы к четырем таблицам
---------------------------

-- получить номер, дату, кол-во, стоимость заказов, 
-- а также названия клиентов, которые их оформили
-- и имя, должность сотрудников, которые эти заказы сопровождали
-- и описание и цену продукции
SELECT order_num, order_date, qty, amount, company, name, title, description, price
FROM orders, customers, salesreps, products
WHERE 
cust = cust_num
AND
rep = empl_num
AND
mfr = mfr_id
AND
product = product_id;


-- запросы к пяти таблицам
---------------------------

-- получить номер, дату, кол-во, стоимость заказов, 
-- а также названия клиентов, которые их оформили
-- и имя, должность сотрудников, которые эти заказы сопровождали,
-- а также город и регион офисов, в которых эти сотрудники работают
-- и описание и цену продукции
SELECT order_num, order_date, qty, amount, company, name, title, city, region, description, price
FROM orders, customers, salesreps, products, offices
WHERE 
cust = cust_num
AND
rep = empl_num
AND
rep_office = office
AND
mfr = mfr_id
AND
product = product_id;

-- форматирование столбцов предыдущего запроса для удобства
SELECT order_num, order_date, company, name, title, city, region, description, price, qty, amount 
FROM orders, customers, salesreps, products, offices
WHERE 
cust = cust_num
AND
rep = empl_num
AND
rep_office = office
AND
mfr = mfr_id
AND
product = product_id;


-- запросы к столбцам с одинаковыми названиями
---------------------------

-- получить номер, имя, возраст, продажи сотрудника,
-- а также город, регион, продажи офиса, в котором сотрудники работают
SELECT empl_num, name, age, salesreps.sales, city, region, offices.sales
FROM salesreps, offices
WHERE rep_office = office; 
