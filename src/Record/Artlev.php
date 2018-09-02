<?php

namespace PAB2\Record;

/**
 * Class ArtLev
 * @package PAB2\Record
 */
class ArtLev extends AbstractRecord
{
    /**
     * @var array
     */
    public static $fields = [
        1 => [
            'key' => 'MutationCode',
            'name' => 'Mutatiecode',
            'length' => 1,
            'format' => 'N',
            'required' => true,
            'start' => 1,
            'end' => 1,
        ],
        2 => [
            'key' => 'TradeItemId',
            'name' => 'Artikelcode leverancier',
            'length' => 20,
            'format' => 'A',
            'required' => true,
            'start' => 2,
            'end' => 21,
        ],
        3 => [
            'key' => 'SupplierGLN',
            'name' => 'GLN leverancier',
            'length' => 13,
            'format' => 'N',
            'required' => true,
            'start' => 22,
            'end' => 34,
        ],
        4 => [
            'key' => 'GTIN',
            'name' => 'GTIN',
            'length' => 14,
            'format' => 'N',
            'required' => false,
            'start' => 35,
            'end' => 48,
        ],
        5 => [
            'key' => 'StartDatePriceNeutralInformation',
            'name' => 'Ingangsdatum prijsneutrale gegevens',
            'length' => 8,
            'format' => 'N',
            'required' => false,
            'start' => 49,
            'end' => 56,
        ],
        6 => [
            'key' => 'OrderableIndicator',
            'name' => 'Code bestelbaarheid',
            'length' => 3,
            'format' => 'A',
            'required' => true,
            'start' => 57,
            'end' => 59,
        ],
        7 => [
            'key' => 'ProcessableIndicator',
            'name' => 'Code verwerkbaar',
            'length' => 3,
            'format' => 'A',
            'required' => true,
            'start' => 60,
            'end' => 62,
        ],
        8 => [
            'key' => 'StatusCode',
            'name' => 'Statuscode',
            'length' => 3,
            'format' => 'A',
            'required' => false,
            'start' => 63,
            'end' => 65,
        ],
        9 => [
            'key' => 'SuccessorGTIN',
            'name' => 'GTIN opvolger',
            'length' => 14,
            'format' => 'N',
            'required' => false,
            'start' => 66,
            'end' => 79,
        ],
        10 => [
            'key' => 'SuccessorTradeItemCode',
            'name' => 'Artikelcode opvolger',
            'length' => 20,
            'format' => 'A',
            'required' => false,
            'start' => 80,
            'end' => 99,
        ],
        11 => [
            'key' => 'PredecessorGTIN',
            'name' => 'GTIN voorganger',
            'length' => 14,
            'format' => 'N',
            'required' => false,
            'start' => 100,
            'end' => 113,
        ],
        12 => [
            'key' => 'PredecessorTradeItemCode',
            'name' => 'Artikelcode voorganger',
            'length' => 20,
            'format' => 'A',
            'required' => false,
            'start' => 114,
            'end' => 133,
        ],
        13 => [
            'key' => 'QuantityOfUseUnits',
            'name' => 'Aantal gebruikseenheden',
            'length' => 16,
            'format' => 'D 12.3',
            'required' => true,
            'start' => 134,
            'end' => 149,
        ],
        14 => [
            'key' => 'UseUnitMeasureUnitCode',
            'name' => 'Gebruikseenheid',
            'length' => 3,
            'format' => 'A',
            'required' => true,
            'start' => 150,
            'end' => 152,
        ],
        15 => [
            'key' => 'ManufacturerGLN',
            'name' => 'GLN fabrikant',
            'length' => 13,
            'format' => 'N',
            'required' => false,
            'start' => 153,
            'end' => 165,
        ],
        16 => [
            'key' => 'Productcode',
            'name' => 'Productcode fabrikant',
            'length' => 20,
            'format' => 'A',
            'required' => false,
            'start' => 166,
            'end' => 185,
        ],
        17 => [
            'key' => 'ProductGTIN',
            'name' => 'GTIN product',
            'length' => 14,
            'format' => 'N',
            'required' => false,
            'start' => 186,
            'end' => 199,
        ],
        18 => [
            'key' => 'ManufacturerTradeItemId',
            'name' => 'Artikelcode fabrikant artikel',
            'length' => 20,
            'format' => 'A',
            'required' => false,
            'start' => 200,
            'end' => 219,
        ],
        19 => [
            'key' => 'ManufacturerTradeItemGTIN',
            'name' => 'GTIN fabrikant artikel',
            'length' => 14,
            'format' => 'N',
            'required' => false,
            'start' => 220,
            'end' => 233,
        ],
        20 => [
            'key' => 'BuyingGroup',
            'name' => 'Afnamegroep code',
            'length' => 17,
            'format' => 'A',
            'required' => false,
            'start' => 234,
            'end' => 250,
        ],
        21 => [
            'key' => 'CBSNumber',
            'name' => 'CBS-nummer',
            'length' => 17,
            'format' => 'A',
            'required' => false,
            'start' => 251,
            'end' => 267,
        ],
        22 => [
            'key' => 'Description',
            'name' => 'Artikelomschrijving',
            'length' => 70,
            'format' => 'A',
            'required' => false,
            'start' => 268,
            'end' => 337,
        ],
        23 => [
            'key' => 'PackageTypeCode',
            'name' => 'Code verpakkingsvorm',
            'length' => 3,
            'format' => 'A',
            'required' => false,
            'start' => 338,
            'end' => 340,
        ],
        24 => [
            'key' => 'PackagingWeight',
            'name' => 'Bruto gewicht',
            'length' => 19,
            'format' => 'D 15.3',
            'required' => false,
            'start' => 341,
            'end' => 359,
        ],
        25 => [
            'key' => 'PackagingWeightMeasureUnitCode',
            'name' => 'Eenheid gewicht',
            'length' => 3,
            'format' => 'A',
            'required' => false,
            'start' => 360,
            'end' => 362,
        ],
        26 => [
            'key' => 'PackagingHeight',
            'name' => 'Hoogte verpakking',
            'length' => 19,
            'format' => 'D 15.3',
            'required' => false,
            'start' => 363,
            'end' => 381,
        ],
        27 => [
            'key' => 'PackagingDepth',
            'name' => 'Lengte verpakking',
            'length' => 19,
            'format' => 'D 15.3',
            'required' => false,
            'start' => 382,
            'end' => 400,
        ],
        28 => [
            'key' => 'PackagingWidth',
            'name' => 'Breedte verpakking',
            'length' => 19,
            'format' => 'D 15.3',
            'required' => false,
            'start' => 401,
            'end' => 419,
        ],
        29 => [
            'key' => 'PackagingSizeMeasureUnitCode',
            'name' => 'Eenheid afmeting',
            'length' => 3,
            'format' => 'A',
            'required' => false,
            'start' => 420,
            'end' => 422,
        ],
        30 => [
            'key' => 'OrderUnitMeasureCode',
            'name' => 'Eenheid afname',
            'length' => 3,
            'format' => 'A',
            'required' => false,
            'start' => 423,
            'end' => 425,
        ],
        31 => [
            'key' => 'MinimumOrderQantity',
            'name' => 'Minimum afname',
            'length' => 16,
            'format' => 'D 12.3',
            'required' => false,
            'start' => 426,
            'end' => 441,
        ],
        32 => [
            'key' => 'OrderMultiple',
            'name' => 'Stapgrootte afname',
            'length' => 16,
            'format' => 'D 12.3',
            'required' => false,
            'start' => 442,
            'end' => 457,
        ],
        33 => [
            'key' => 'DeliveryTime',
            'name' => 'Levertijd',
            'length' => 15,
            'format' => 'N',
            'required' => false,
            'start' => 458,
            'end' => 472,
        ],
        34 => [
            'key' => 'DeliveryTimeMeasureUnitCode',
            'name' => 'Eenheid levertijd',
            'length' => 6,
            'format' => 'A',
            'required' => false,
            'start' => 473,
            'end' => 478,
        ],
        35 => [
            'key' => 'StartDatePriceInformation',
            'name' => 'Ingangsdatum prijsinformatie',
            'length' => 8,
            'format' => 'N',
            'required' => false,
            'start' => 479,
            'end' => 486,
        ],
        36 => [
            'key' => 'VatRate',
            'name' => 'Code BTW-tarief',
            'length' => 1,
            'format' => 'A',
            'required' => false,
            'start' => 487,
            'end' => 487,
        ],
        37 => [
            'key' => 'VatPercentage',
            'name' => 'BTW-percentage',
            'length' => 18,
            'format' => 'D 13.4',
            'required' => false,
            'start' => 488,
            'end' => 505,
        ],
        38 => [
            'key' => 'FollowManufacturerPriceIndication',
            'name' => 'Indicatie fabrikantprijs volgen',
            'length' => 3,
            'format' => 'A',
            'required' => false,
            'start' => 506,
            'end' => 508,
        ],
        39 => [
            'key' => 'GrossPriceAllowanceGroup',
            'name' => 'Bruto prijs bewerkingstoeslag',
            'length' => 16,
            'format' => 'D 11.4',
            'required' => false,
            'start' => 509,
            'end' => 524,
        ],
        40 => [
            'key' => 'AllowanceGroup',
            'name' => 'Kortingsgroep',
            'length' => 35,
            'format' => 'A',
            'required' => false,
            'start' => 525,
            'end' => 559,
        ],
        41 => [
            'key' => 'GrossPriceInOrderUnit',
            'name' => 'Bruto prijs',
            'length' => 16,
            'format' => 'D 11.4',
            'required' => false,
            'start' => 560,
            'end' => 575,
        ],
        42 => [
            'key' => 'NumberOfUnitsInPriceBasis',
            'name' => 'Aantal prijsbasis',
            'length' => 10,
            'format' => 'D 6.3',
            'required' => false,
            'start' => 576,
            'end' => 585,
        ],
        43 => [
            'key' => 'PriceUnitMeasureUnitCode',
            'name' => 'Prijseenheid',
            'length' => 3,
            'format' => 'A',
            'required' => false,
            'start' => 586,
            'end' => 588,
        ],
        44 => [
            'key' => 'NetPriceInOrderUnit',
            'name' => 'Netto prijs',
            'length' => 16,
            'format' => 'D 11.4',
            'required' => false,
            'start' => 589,
            'end' => 604,
        ],
        45 => [
            'key' => 'PriceToOrderUnitFactor',
            'name' => 'Omrekenfactor prijs- naar besteleenheid',
            'length' => 16,
            'format' => 'D 12.3',
            'required' => false,
            'start' => 605,
            'end' => 620,
        ],
        46 => [
            'key' => 'CurrencyCode',
            'name' => 'Valutacode',
            'length' => 3,
            'format' => 'A',
            'required' => false,
            'start' => 621,
            'end' => 623,
        ],
    ];

    /**
     * @var string
     */
    protected $type = 'ArtLev';

    /**
     * @var integer
     */
    protected $fileId;

    /**
     * ArtLev constructor.
     * @param array $values
     */
    public function __construct($fileId, array $values)
    {
        $this->fileId = $fileId;
        $this->key = 'art_lev';
        $this->title = 'ArtLev';

        parent::__construct($values);
    }

    /**
     * @return integer
     */
    public function getFileId()
    {
        return $this->fileId;
    }

    /**
     * @param $key
     * @param null $default
     * @return null
     */
    public function getValue(string $key, $default = null)
    {
        return (isset($this->values[$key]))? $this->values[$key] : $default;
    }

    /**
     * @return string
     */
    public function toString()
    {
        $string = '';
        $values = $this->getValues();

        foreach (self::$fields as $field) {

            $value = '';
            if ($values[$field['key']]) {
                $value = $values[$field['key']];
            }

            $string .= str_pad($value, $field['length'], ' ', STR_PAD_RIGHT);
        }

        return $string;
    }
}
