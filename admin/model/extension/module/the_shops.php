<?php class ModelExtensionModuleTheShops extends Model {
    public function editShops($data) {

        $this->db->query("DELETE FROM " . DB_PREFIX . "the_shops");

        if (isset($data['shop'])) {
            foreach ($data['shop'] as $r_shop) {
                $this->db->query("INSERT INTO " . DB_PREFIX . "the_shops SET city = '" . $this->db->escape($r_shop['city']) . "', address = '" . $this->db->escape($r_shop['address']) . "', longitude = '" . $this->db->escape($r_shop['longitude']) . "', latitude = '" . $this->db->escape($r_shop['latitude']) . "', schedule = '" . $this->db->escape($r_shop['schedule']) . "'");
//
//                $option_id = $this->db->getLastId();
            }
        }
    }
    public function getShops(){
        $query = $this->db->query("SELECT * FROM " . DB_PREFIX . "the_shops");

        return $query->rows;
    }
}
