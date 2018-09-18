<?php
namespace Legaspi\override\Ui\Component\Listing\Column\Legaspioverridebloglist;

class PageActions extends \Magento\Ui\Component\Listing\Columns\Column
{
    public function prepareDataSource(array $dataSource)
    {
        if (isset($dataSource["data"]["items"])) {
            foreach ($dataSource["data"]["items"] as & $item) {
                $name = $this->getData("name");
                $id = "X";
                if(isset($item["legaspi_override_blog_id"]))
                {
                    $id = $item["legaspi_override_blog_id"];
                }
                $item[$name]["view"] = [
                    "href"=>$this->getContext()->getUrl(
                        "legaspi_override_blog_list/blog/edit",["legaspi_override_blog_id"=>$id]),
                    "label"=>__("Edit")
                ];
            }
        }

        return $dataSource;
    }    
    
}
