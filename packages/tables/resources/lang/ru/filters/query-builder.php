<?php

return [

'label' => 'Конструктор запросов',

    'form' => [

        'operator' => [
            'label' => 'Оператор',
        ],

        'or_groups' => [

            'label' => 'Группы',

            'block' => [
                'label' => 'Дизъюнкция (ИЛИ)',
                'or' => 'ИЛИ',
            ],

        ],

        'rules' => [

            'label' => 'Правила',

            'item' => [
                'and' => 'И',
            ],

        ],

    ],

    'no_rules' => '(Нет правил)',

    'item_separators' => [
        'and' => 'И',
        'or' => 'ИЛИ',
    ],

    'operators' => [

        'is_filled' => [

            'label' => [
                'direct' => 'Заполнено',
                'inverse' => 'Пусто',
            ],

            'summary' => [
                'direct' => ':attribute заполнено',
                'inverse' => ':attribute пусто',
            ],

        ],

        'boolean' => [

            'is_true' => [

                'label' => [
                    'direct' => 'Истинно',
                    'inverse' => 'Ложно',
                ],

                'summary' => [
                    'direct' => ':attribute истинно',
                    'inverse' => ':attribute ложно',
                ],

            ],

        ],

        'date' => [

            'is_after' => [

                'label' => [
                    'direct' => 'Позже',
                    'inverse' => 'Не позже',
                ],

                'summary' => [
                    'direct' => ':attribute позже :date',
                    'inverse' => ':attribute не позже :date',
                ],

            ],

            'is_before' => [

                'label' => [
                    'direct' => 'Ранее',
                    'inverse' => 'Не ранее',
                ],

                'summary' => [
                    'direct' => ':attribute ранее :date',
                    'inverse' => ':attribute не ранее :date',
                ],

            ],

            'is_date' => [

                'label' => [
                    'direct' => 'Дата',
                    'inverse' => 'Не дата',
                ],

                'summary' => [
                    'direct' => ':attribute это :date',
                    'inverse' => ':attribute не :date',
                ],

            ],

            'is_month' => [

                'label' => [
                    'direct' => 'Месяц',
                    'inverse' => 'Не месяц',
                ],

                'summary' => [
                    'direct' => ':attribute это :month',
                    'inverse' => ':attribute не :month',
                ],

            ],

            'is_year' => [

                'label' => [
                    'direct' => 'Год',
                    'inverse' => 'Не год',
                ],

                'summary' => [
                    'direct' => ':attribute это :year',
                    'inverse' => ':attribute не :year',
                ],

            ],

            'form' => [

                'date' => [
                    'label' => 'Дата',
                ],

                'month' => [
                    'label' => 'Месяц',
                ],

                'year' => [
                    'label' => 'Год',
                ],

            ],

        ],

        'number' => [

            'equals' => [

                'label' => [
                    'direct' => 'Равно',
                    'inverse' => 'Не равно',
                ],

                'summary' => [
                    'direct' => ':attribute равно :number',
                    'inverse' => ':attribute не равно :number',
                ],

            ],

            'is_max' => [

                'label' => [
                    'direct' => 'Максимум',
                    'inverse' => 'Больше чем',
                ],

                'summary' => [
                    'direct' => ':attribute максимум :number',
                    'inverse' => ':attribute больше чем :number',
                ],

            ],

            'is_min' => [

                'label' => [
                    'direct' => 'Минимум',
                    'inverse' => 'Меньше чем',
                ],

                'summary' => [
                    'direct' => ':attribute минимум :number',
                    'inverse' => ':attribute меньше чем :number',
                ],

            ],

            'aggregates' => [

                'average' => [
                    'label' => 'Среднее',
                    'summary' => 'Среднее :attribute',
                ],

                'max' => [
                    'label' => 'Максимум',
                    'summary' => 'Максимум :attribute',
                ],

                'min' => [
                    'label' => 'Минимум',
                    'summary' => 'Минимум :attribute',
                ],

                'sum' => [
                    'label' => 'Сумма',
                    'summary' => 'Сумма :attribute',
                ],

            ],

            'form' => [

                'aggregate' => [
                    'label' => 'Агрегат',
                ],

                'number' => [
                    'label' => 'Число',
                ],

            ],

        ],

        'relationship' => [

            'equals' => [

                'label' => [
                    'direct' => 'Имеет',
                    'inverse' => 'Не имеет',
                ],

                'summary' => [
                    'direct' => 'Имеет :count :relationship',
                    'inverse' => 'Не имеет :count :relationship',
                ],

            ],

            'has_max' => [

                'label' => [
                    'direct' => 'Максимум',
                    'inverse' => 'Больше чем',
                ],

                'summary' => [
                    'direct' => 'Имеет максимум :count :relationship',
                    'inverse' => 'Имеет больше чем :count :relationship',
                ],

            ],

            'has_min' => [

                'label' => [
                    'direct' => 'Минимум',
                    'inverse' => 'Меньше чем',
                ],

                'summary' => [
                    'direct' => 'Имеет минимум :count :relationship',
                    'inverse' => 'Имеет меньше чем :count :relationship',
                ],

            ],

            'is_empty' => [

                'label' => [
                    'direct' => 'Пусто',
                    'inverse' => 'Не пусто',
                ],

                'summary' => [
                    'direct' => ':relationship пусто',
                    'inverse' => ':relationship не пусто',
                ],

            ],

            'is_related_to' => [

                'label' => [

                    'single' => [
                        'direct' => 'Есть',
                        'inverse' => 'Нет',
                    ],

                    'multiple' => [
                        'direct' => 'Содержит',
                        'inverse' => 'Не содержит',
                    ],

                ],

                'summary' => [

                    'single' => [
                        'direct' => ':relationship это :values',
                        'inverse' => ':relationship не :values',
                    ],

                    'multiple' => [
                        'direct' => ':relationship содержит :values',
                        'inverse' => ':relationship не содержит :values',
                    ],

                    'values_glue' => [
                        0 => ', ',
                        'final' => ' или ',
                    ],

                ],

                'form' => [

                    'value' => [
                        'label' => 'Значение',
                    ],

                    'values' => [
                        'label' => 'Значения',
                    ],

                ],

            ],

            'form' => [

                'count' => [
                    'label' => 'Количество',
                ],

            ],

        ],

        'select' => [

            'is' => [

                'label' => [
                    'direct' => 'Есть',
                    'inverse' => 'Нет',
                ],

                'summary' => [
                    'direct' => ':attribute это :values',
                    'inverse' => ':attribute не :values',
                    'values_glue' => [
                        ', ',
                        'final' => ' или ',
                    ],
                ],

                'form' => [

                    'value' => [
                        'label' => 'Значение',
                    ],

                    'values' => [
                        'label' => 'Значения',
                    ],

                ],

            ],

        ],

        'text' => [

            'contains' => [

                'label' => [
                    'direct' => 'Содержит',
                    'inverse' => 'Не содержит',
                ],

                'summary' => [
                    'direct' => ':attribute содержит :text',
                    'inverse' => ':attribute не содержит :text',
                ],

            ],

            'ends_with' => [

                'label' => [
                    'direct' => 'Заканчивается на',
                    'inverse' => 'Не заканчивается на',
                ],

                'summary' => [
                    'direct' => ':attribute заканчивается на :text',
                    'inverse' => ':attribute не заканчивается на :text',
                ],

            ],

            'equals' => [

                'label' => [
                    'direct' => 'Равно',
                    'inverse' => 'Не равно',
                ],

                'summary' => [
                    'direct' => ':attribute равно :text',
                    'inverse' => ':attribute не равно :text',
                ],

            ],

            'starts_with' => [

                'label' => [
                    'direct' => 'Начинается с',
                    'inverse' => 'Не начинается с',
                ],

                'summary' => [
                    'direct' => ':attribute начинается с :text',
                    'inverse' => ':attribute не начинается с :text',
                ],

            ],

            'form' => [

                'text' => [
                    'label' => 'Текст',
                ],

            ],

        ],

    ],

    'actions' => [

        'add_rule' => [
            'label' => 'Добавить правило',
        ],

        'add_rule_group' => [
            'label' => 'Добавить группу правил',
        ],

    ],

];
