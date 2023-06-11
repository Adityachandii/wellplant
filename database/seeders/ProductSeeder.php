<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::beginTransaction();
        
        // PLANTS AND SEEDS
        Product::create([
            'name' => 'California Blue Bell Wildflower',
            'description' => 'California blue bells are easy to grow from seed and are great for the wildflower garden! Their cobalt blue blooms make a striking appearance in the garden and look wonderful in rock gardens. This wildflower is quick to bloom, easy to grow, and so beautiful! California Blue Bell (Phacelia campanularia) is a beautiful wildflower native to California and parts of southwestern United States. Also known as Desert Bluebells or Desert Canterbury Bells, these vibrant blue flowers are a delightful addition to any garden or natural landscape. With their trumpet-shaped blooms and delicate appearance, California Blue Bells attract pollinators like bees and butterflies, making them a valuable asset for supporting local ecosystems.',
            'price' => 35000,
            'stock' => 10,
            'soldQty' => 1,
            'takeCareDesc' => "Choosing the Right Time: California Blue Bell seeds are best sown in late fall or early spring when the soil temperature is cool. This will help provide ideal conditions for germination.

            Soil Preparation: Prepare the planting area by removing any weeds, rocks, or debris. California Blue Bells prefer well-drained soil, so make sure the soil is loose and fertile. You can add organic matter like compost to improve the soil's quality.
        
            Seed Sowing: Scatter the California Blue Bell seeds over the prepared soil. You can lightly press them into the soil, but avoid burying them too deep, as they require light for germination. Aim for a spacing of about 6-12 inches between each seed.
        
            Watering: After sowing the seeds, water the area gently to moisten the soil. Be careful not to overwater, as excessive moisture can lead to rotting. Maintain a consistently moist but not soggy environment until germination occurs.
        
            Sunlight Requirements: California Blue Bells thrive in full sun to partial shade. Choose a location that receives at least 6 hours of direct sunlight per day.
        
            Maintenance: Once the seedlings emerge, thin them out to provide adequate space for growth. Aim for a spacing of around 12-18 inches between the plants. Regularly remove any weeds that compete for nutrients and water.
        
            Watering Schedule: California Blue Bells have moderate water needs. Water the plants when the top inch of soil feels dry, providing enough water to keep the soil moist but not waterlogged.
        
            Mulching: Applying a layer of organic mulch around the plants helps conserve moisture, suppress weed growth, and maintain a cooler root zone temperature. Use mulch materials like wood chips or straw, ensuring they are not in direct contact with the plant stems.
        
            Fertilization: Generally, California Blue Bells do not require heavy fertilization. However, if the soil is poor, you can apply a balanced, slow-release fertilizer during the early stages of growth.
        
            Pruning and Deadheading: To promote continuous blooming, remove faded flowers by pinching or cutting the stems below the spent blooms. This process, known as deadheading, encourages the plant to produce more flowers.",
            'categoryId' => 1,
            'subCategoryId' => 1,
            'sellerId' => 1,
        ]);
        
        Product::create([
            'name' => 'Oceanside Spinach Seeds',
            'description' => "'Oceanside' is the perfect spinach for tender baby greens. Enjoy deep green, flavorful, easy-to-clean leaves in just 25 days! Great for fresh salads, or added to stir-fries at the last minute. Spinach packs a punch when it comes to vitamins and minerals. Full-grown plants in 40 to 60 days. Plants are resistant to downy mildew. Oceanside Spinach is a unique variety of spinach known for its vibrant green leaves and delicious taste. This particular type of spinach thrives in coastal regions and can be grown both in outdoor gardens and indoor containers.",
            'price' => 25000,
            'stock' => 50,
            'soldQty' => 0,
            'takeCareDesc' => "Select a location that receives at least 4-6 hours of sunlight per day. If you're growing indoors, place the container near a south-facing window or use grow lights.
            Prepare well-draining soil by adding organic matter like compost or aged manure. Spinach prefers fertile soil with a slightly acidic to neutral pH (around 6.0-7.0).
            Sow the seeds directly into the soil at a depth of 1/2 inch (1.25 cm). Space the seeds about 2-4 inches (5-10 cm) apart in rows with a separation of 12-18 inches (30-45 cm) between rows.
            Keep the soil consistently moist but not waterlogged. Water the seeds gently after planting and continue to provide water as needed, ensuring the soil doesn't dry out.
            Avoid overhead watering to prevent the spread of diseases. Instead, water at the base of the plants or use drip irrigation to keep the leaves dry.
            Oceanside Spinach is well-suited for cool-season cultivation, with an optimal temperature range of 50-70°F (10-21°C).
            Ensure the plants are protected from extreme heat or cold. Provide shade during hot summer months and use row covers or cold frames to extend the growing season during colder periods.
            Prior to planting, incorporate a balanced, slow-release fertilizer into the soil following the package instructions. This will provide the necessary nutrients for the spinach plants.
            Additionally, side-dress the plants with compost or a nitrogen-rich fertilizer halfway through the growing season to promote healthy growth.
            Regularly inspect the planting area and remove any weeds that may compete with the spinach for nutrients and water. Be careful while weeding to avoid damaging the shallow roots of the spinach plants.
            Oceanside Spinach is relatively resistant to pests and diseases. However, occasional pests such as aphids or leafminers may appear.
            Monitor the plants regularly and use organic pest control methods like insecticidal soap or neem oil if necessary. Remove any affected leaves promptly to prevent the spread of diseases.
            Harvest the outer leaves of the Oceanside Spinach plants when they reach a size of 4-6 inches (10-15 cm). Use clean garden shears or scissors to cut the leaves close to the base of the plant.
            Avoid harvesting all the leaves at once to allow the plant to continue growing and produce a continuous harvest. Regular harvesting promotes new leaf production.",
            'categoryId' => 1,
            'subCategoryId' => 2,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Fall Vegie Seed Starter Bundle',
            'description' => 'This bundle includes:

            Organic Roquette Arugula Seeds
            Organic Buttercrunch Lettuce Seeds
            Organic Scarlet Nantes Carrot Seeds
            Watermelon Radish Seeds
            Organic Roquette Arugula Seeds:
            
            Roquette Arugula is an easy crop and can be grown in containers. This spicy green is not fussy. In many areas of zones 9 and 10, it can be grown almost year round! Harvest your arugula regularly to enjoy the best flavor',
            'price' => 10000,
            'stock' => 50,
            'soldQty' => 0,
            'takeCareDesc' => "Find a location that receives at least 4-6 hours of sunlight per day. If growing indoors, choose a spot near a south-facing window or use grow lights to provide sufficient light.
            Ensure the area has proper ventilation to prevent the buildup of excess humidity and reduce the risk of fungal diseases.
            Use seed trays, peat pots, or recycled containers with drainage holes for sowing the seeds.
            Fill the containers with a well-draining seed starting mix. Avoid using garden soil, as it may contain pathogens or be too heavy for seedlings.
            Follow the instructions provided with the seed bundle regarding the specific planting depth and spacing for each type of vegetable.
            Gently press the seeds into the soil and cover them with a thin layer of seed starting mix or vermiculite.
            Keep the soil evenly moist, but not waterlogged. Water the seeds gently after planting and continue to provide moisture as needed.
            Use a spray bottle or a watering can with a fine spout to avoid displacing the seeds or causing soil compaction.
            Most cool-season vegetables prefer temperatures between 50-70°F (10-21°C). Ensure the planting area maintains these conditions.
            If starting the seeds indoors, maintain a consistent temperature by placing them in a warm spot or using a seedling heat mat if necessary.
            Initially, the seeds contain enough nutrients to support germination and early growth. However, after the seedlings develop their first set of true leaves, you can start applying a diluted, balanced liquid fertilizer according to the package instructions.
            Gradually increase the strength of the fertilizer as the plants grow, but be careful not to overfertilize, as it can damage the seedlings.
            Once the seedlings have grown 2-4 true leaves and the weather and soil conditions are favorable, they can be transplanted into the garden or larger containers.
            Harden off the seedlings by gradually exposing them to outdoor conditions over the course of a week before planting them in the ground.
            Monitor the seedlings regularly for any signs of pests or diseases. If necessary, apply appropriate organic pest control methods or consult a local gardening expert for guidance.
            Keep the soil consistently moist but not saturated, and provide protection from extreme weather conditions like frost or excessive heat.",
            'categoryId' => 1,
            'subCategoryId' => 2,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'California Mix Zinnia',
            'description' => 'California Zinnia Mix blooms in brilliant colorful shades of orange, purple, red, white, and yellow during the high heat of the summer. Large 4-5″ blooms on strong stems make this mix perfect for the cut flower gardener. Very easy to grow and adds a rainbow of color to any planting.

            Grows wild in Mexico, and is best as a direct-sow seed. Thin to 6″-12″ apart. Deadhead spent flowers to prolong the blooming season and let go to seed for return volunteers the following year',
            'price' => 55500,
            'stock' => 10,
            'soldQty' => 0,
            'takeCareDesc' => "Select a location that receives full sun for at least 6-8 hours a day.
            Prepare the soil by removing any weeds, rocks, or debris. Zinnias prefer well-draining soil with a pH between 5.5 and 7.
            Sow the California Mix Zinnia seeds directly into the soil after the last frost date in your region. Alternatively, you can start seeds indoors 4-6 weeks before the last frost and transplant them outdoors.
            Space the zinnia seeds or seedlings 6-12 inches (15-30 cm) apart to provide adequate air circulation and room for the plants to grow.
            Keep the soil consistently moist but not waterlogged. Water deeply once or twice a week, depending on the weather and soil conditions.
            Avoid overhead watering, as wet foliage can lead to the development of fungal diseases. Instead, water at the base of the plants or use drip irrigation.
            Apply a layer of organic mulch, such as straw or wood chips, around the base of the plants. Mulching helps retain moisture, suppresses weed growth, and regulates soil temperature.
            Prior to planting, incorporate organic compost or a balanced slow-release fertilizer into the soil.
            Once the zinnias start to grow and develop foliage, you can feed them with a water-soluble fertilizer every 3-4 weeks. Follow the package instructions for proper dilution and application rates.
            As the zinnias grow taller and produce larger flowers, they may benefit from support. Install stakes or small plant cages around the plants to prevent them from bending or toppling over.
            If you wish to collect seeds for future planting, allow some of the flowers to mature and dry on the plant. Once the flower heads have dried, collect the seeds and store them in a cool, dry place.",
            'categoryId' => 1,
            'subCategoryId' => 1,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'California Yellow Poppy',
            'description' => 'This beautiful California poppy has stunning golden yellow flowers that bloom during the cooler season. ‘Golden West’ California poppy flowers are a favorite of honey bees and wild bees! In Zones 9 and 10, it is best to sow poppies before seasonal winter rains to enjoy flowers in early spring. The 12-18″ flowers easily self-sow for beautiful blooms the following year.',
            'price' => 37000,
            'stock' => 5,
            'soldQty' => 0,
            'takeCareDesc' => "Select a location that receives full sun for at least 6-8 hours a day. California Yellow Poppies can tolerate partial shade, but they thrive in full sun.
            Prepare the soil by removing any weeds, rocks, or debris. Poppies prefer well-draining soil with a pH between 6.0 and 7.0.
            Sow the California Yellow Poppy seeds directly into the soil in early spring or fall. Rake the soil lightly and sprinkle the seeds evenly on the prepared area.
            California Yellow Poppies are drought-tolerant once established and do not require frequent watering. Water the seeds lightly after planting to ensure good seed-to-soil contact.
            After germination, water the young seedlings regularly until they become established. Once established, water deeply but infrequently, allowing the soil to dry out between waterings.
            California Yellow Poppies are low-maintenance plants and generally do not require heavy fertilization.
            If your soil is poor or lacks nutrients, you can apply a balanced, slow-release fertilizer during the early stages of growth. Follow the package instructions for proper application rates.
            Deadheading, or removing spent flowers, encourages continuous blooming and prevents the plants from diverting energy into seed production.
            Check the plants regularly and pinch off faded flowers just above the foliage. This will promote new growth and prolong the blooming period.
            California Yellow Poppies are known for their ability to self-sow and naturalize in the garden. Allow some of the flowers to mature and dry on the plant, and they will drop their seeds naturally.
            The following season, new poppy plants may emerge from the dropped seeds. Thin out the seedlings if they become overcrowded to ensure proper growth.",
            'categoryId' => 1,
            'subCategoryId' => 1,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Common Chives Seeds Organic, Heirloom',
            'description' => 'Chives are super easy to grow, require little maintenance, tolerate drought, and come back year after year. Edible flowers are loved by bees, make a tasty chive vinegar, look and taste great in salads, and dry well for arrangements; foliage and/or flowers add a subtle onion flavor to many dishes. Great for containers; grow indoors for year-round harvest.',
            'price' => 7000,
            'stock' => 65,
            'soldQty' => 0,
            'takeCareDesc' => "Start by selecting a location that receives at least 4-6 hours of direct sunlight per day. Chives can also tolerate partial shade.
            Prepare well-draining soil by incorporating organic matter such as compost or aged manure. Chives prefer slightly alkaline soil with a pH between 6.0 and 7.0.
            Sow the chive seeds directly into the soil in early spring or late summer, about ¼ inch (6 mm) deep. Space the seeds 6-8 inches (15-20 cm) apart in rows or in small clusters.
            Keep the soil consistently moist but not waterlogged. Water the seeds gently after planting and continue to provide water as needed, ensuring the soil doesn't dry out completely.
            Be cautious not to overwater, as chives can suffer from root rot in waterlogged conditions. Allow the top layer of soil to dry slightly between waterings.
            Chives generally do not require heavy fertilization. However, incorporating compost or well-balanced organic fertilizer into the soil during planting can provide a nutrient boost.
            If the plants show signs of nutrient deficiency, you can apply a light application of organic fertilizer in early spring or late summer.
            Once the chive plants have grown to a height of 6-8 inches (15-20 cm) or have established a clump, you can start harvesting the leaves.
            Snip the leaves near the base with clean scissors or garden shears. Avoid cutting more than one-third of the plant at a time, allowing it to continue growing.",
            'categoryId' => 1,
            'subCategoryId' => 2,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Worm Castings',
            'description' => "Add life back to your soil with Urban Worm Castings, freshly harvested within the past 2 weeks! These castings aren't like the traditional ones you'd buy at a garden center, which are screened to 1/8\" (.32 cm). Ours are screened at 1/4\" (.64 cm), so your castings will likely have:

                - More organic matter
                
                - Worm cocoons
                
                - The occasional worm or two
                
                - We feel this offers more value to you than smaller particle worm castings which are often lower in biological activity.
                
                - Worm castings are shown to:
                
                - Boost plant growth
                
                - Speed up germination
                
                - Increase yield by 20-80%
                
                - Suppress pests and pathogens
                
                - Improve water retention",
            'price' => 20000,
            'stock' => 65,
            'soldQty' => 1,
            'takeCareDesc' => null,
            'categoryId' => 2,
            'subCategoryId' => 1,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Urban Worm Bag Eco: Made from Recycled Plastic Bottles!',
            'description' => "Made with recycled plastic bottles in North America!

            The Urban Worm Bag Eco is the newest in the line of Urban Worm Bags. We've partnered with a Tijuana MX-based textile manufacturer to give you a much more sustainably-sourced option when purchasing your Urban Worm Bag!
            
            The Urban Worm Bag Eco has identical form and function to the popular Urban Worm Bag Version 2. It has the same dimensions, the same patented removable bottom, and the same coloring.",
            'price' => 5000,
            'stock' => 200,
            'soldQty' => 0,
            'takeCareDesc' => null,
            'categoryId' => 2,
            'subCategoryId' => 2,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Worm Bin Accessory Bundle',
            'description' => 'One simple price gets you a handy bundle you can use for any worm bin, not just the Urban Worm Bag:
                - 2 x 1.4lb bricks of Urban Worm Coco Coir - a $28 value
                - Coco coir is a more sustainable peat moss alternative used for worm bedding
                - 2 Jute Urban Worm Blankets - a $28 value
                - lay this compostable mat on top of your vermicompost to regulate moisture and keep conditions dark
                - Urban Worm Thermometer - a $13 value
                - monitor temps to keep your bin in the "green" zone',
            'price' => 100000,
            'stock' => 35,
            'soldQty' => 0,
            'takeCareDesc' => null,
            'categoryId' => 2,
            'subCategoryId' => 1,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Urban Worm Coco Coir',
            'description' => 'Want lots of coco coir?

            This 5kg (11lb) block expands to 2.25 cubic feet (63.7 liters) when moistened. Perfect for larger worm bins and soil-building projects for your garden.
            
            Urban Worm Coco Coir is a proven, eco-friendly worm bedding and soil amendment made from coconut husks and is rinsed to remove salt content and features a near-neutral pH.',
            'price' => 23000,
            'stock' => 65,
            'soldQty' => 0,
            'takeCareDesc' => null,
            'categoryId' => 2,
            'subCategoryId' => 1,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Epic Soldier Fly Frass',
            'description' => "Epic Frass is an organic fertilizer made from soldier fly excrement (yep, it's fly poop). Rich in both macro and micronutrients, our Epic Frass promotes long-term health, and longevity for soil. It also ensures lush plant growth. In studies by the University of Vermont, frass provided 78% more yield than regular fertilizers or plant food. Use Epic Frass in place of generic plant foods for a truly epic harvest.",
            'price' => 10000,
            'stock' => 84,
            'soldQty' => 0,
            'takeCareDesc' => null,
            'categoryId' => 2,
            'subCategoryId' => 1,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Urban Worm Chow',
            'description' => "Get your worms a little chubbier with a protein-rich blend of cornmeal, soybean hulls, alfalfa, oats, fish meal, bone meal and more!

            If you are vermicomposting, then your food waste or other organic wastes will be your primary food source.
            
            But if you need a boost to biomass for selling bait worms for instance, Urban Worm Chow will do the trick within a couple days.
            
            As always, with free shipping to the lower 48!",
            'price' => 34000,
            'stock' => 23,
            'soldQty' => 0,
            'takeCareDesc' => null,
            'categoryId' => 2,
            'subCategoryId' => 2,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Original 6-in-1 Metal Raised Garden Bed',
            'description' => "Birdies beds are made from cold-rolled galvanized steel with an Aluzinc coating, ensuring durability and longevity under all environmental conditions.

            We use a galvanization process three times stronger than most cheaper, copycat competitors on the market. Then, our beds are powder-coated with a food-safe, non-toxic paint for a beautiful, long-lasting aesthetic.
            
            The Birdies Difference
            Customizable: Each bed comes with 4 corner panels and 6 side panels, allowing for customized assembly into 1 of 6 different dimensions.
            
            15\" (38.1 cm) Tall: Compared to most metal beds at 12\" (30.48 cm) tall or less, these beds offer improved pest resistance and season extension. They also allow for better soil life, drainage, and root growth.
            
            Easy to Assemble: Put your bed together with nuts, bolts, and washers for an easy no-tool construction, keeping your bed sturdy and safe from bowing.
            
            Lightweight and Strong: Aluzinc galvanized 24-gauge steel is lightweight but strong, lasting four to seven times longer than standard wooden beds.
            
            Rust and Corrosion Resistant: Aluzinc is two to seven times more effective against rust and corrosion than standard galvanized coatings. These will outlast even the highest-quality wooden raised beds with no fading over time.
            
            No Contamination: Unlike low-grade plastic, chemically treated wood, or poorly manufactured copycats, Birdies Aluzinc steel does not leach or break down over time in any significant way, meaning these beds are completely safe to grow food in.",
            'price' => 150000,
            'stock' => 10,
            'soldQty' => 0,
            'takeCareDesc' => null,
            'categoryId' => 3,
            'subCategoryId' => 1,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Original 8-in-1 Metal Raised Garden Bed',
            'description' => "Birdies beds are made from cold-rolled galvanized steel with an Aluzinc coating, ensuring durability and longevity under all environmental conditions.

            We use a galvanization process three times stronger than most cheaper, copycat competitors on the market. Then, beds are powder-coated with a food-safe, non-toxic paint for a beautiful, long-lasting aesthetic.
            
            The Birdies Difference
            Customizable: Each bed comes with 4 corner panels and 6 side panels, allowing for customized assembly into 1 of 8 different dimensions.
            
            15\" (38.1 cm) Tall: Compared to most metal beds at 12\" (30.48 cm) tall or less, these beds offer improved pest resistance and season extension. They also allow for better soil life, drainage, and root growth.
            
            Easy to Assemble: Put your bed together with nuts, bolts, and washers for an easy no-tool construction, keeping your bed sturdy and safe from bowing.
            
            Lightweight and Strong: Aluzinc galvanized 25-gauge steel is lightweight but strong, lasting four to seven times longer than standard wooden beds.
            
            Rust and Corrosion Resistant: Aluzinc is two to seven times more effective against rust and corrosion than standard galvanized coatings. These will outlast even the highest-quality wooden raised beds with no fading over time.
            
            No Contamination: Unlike low-grade plastic, chemically treated wood, or poorly manufactured copycats, Birdies Aluzinc steel does not leach or break down over time in any significant way, meaning these beds are completely safe to grow food in.",
            'price' => 180000,
            'stock' => 10,
            'soldQty' => 0,
            'takeCareDesc' => null,
            'categoryId' => 3,
            'subCategoryId' => 1,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Tall 6-in-1 Metal Raised Garden Bed',
            'description' => "Birdies beds are made from cold-rolled galvanized steel with an Aluzinc coating, ensuring durability and longevity under all environmental conditions.

            We use a galvanization process three times stronger than most cheaper, copycat competitors on the market. Then, beds are powder-coated with a food-safe, non-toxic paint for a beautiful, long-lasting aesthetic.
            The Birdies Difference 
            Customizable: Each bed comes with 4 corner panels and 6 side panels, allowing for customized assembly into 1 of 6 different dimensions.
            
            30\" (76.2cm) Tall: Compared to most metal beds at 12\" (30.48 cm) tall or less, these beds offer improved pest resistance and season extension. They also allow for better soil life, drainage, and root growth.
            
            Easy to Assemble: Put your bed together with nuts, bolts, and washers for an easy no-tool construction, keeping your bed sturdy and safe from bowing.
            
            Lightweight and Strong: Aluzinc galvanized 24-gauge steel is lightweight but strong, lasting four to seven times longer than standard wooden beds.
            
            Rust and Corrosion Resistant: Aluzinc is two to seven times more effective against rust and corrosion than standard galvanized coatings. These will outlast even the highest-quality wooden raised beds with no fading over time.
            
            No Contamination: Unlike low-grade plastic, chemically treated wood, or poorly manufactured copycats, Birdies Aluzinc steel does not leach or break down over time in any significant way, meaning these beds are completely safe to grow food in.",
            'price' => 200000,
            'stock' => 5,
            'soldQty' => 0,
            'takeCareDesc' => null,
            'categoryId' => 3,
            'subCategoryId' => 1,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Tall 8-in-1 Metal Raised Garden Bed',
            'description' => "Birdies beds are made from cold-rolled galvanized steel with an Aluzinc coating, ensuring durability and longevity under all environmental conditions.

            We use a galvanization process three times stronger than most cheaper, copycat competitors on the market. Then, beds are powder-coated with a food-safe, non-toxic paint for a beautiful, long-lasting aesthetic.
            
            The Birdies Difference
            Customizable: Each bed comes with 4 corner panels and 6 side panels, allowing for customized assembly into 1 of 8 different dimensions.
            
            30\" (76.2 cm) Tall: Compared to most metal beds at 12\" (30.48 cm) tall or less, these beds offer improved pest resistance and season extension. They also allow for better soil life, drainage, and root growth.
            
            Easy to Assemble: Put your bed together with nuts, bolts, and washers for an easy no-tool construction, keeping your bed sturdy and safe from bowing.
            
            Lightweight and Strong: Aluzinc galvanized 25-gauge steel is lightweight but strong, lasting four to seven times longer than standard wooden beds.
            
            Rust and Corrosion Resistant: Aluzinc is two to seven times more effective against rust and corrosion than standard galvanized coatings. These will outlast even the highest-quality wooden raised beds with no fading over time.
            
            No Contamination: Unlike low-grade plastic, chemically treated wood, or poorly manufactured copycats, Birdies Aluzinc steel does not leach or break down over time in any significant way, meaning these beds are completely safe to grow food in.",
            'price' => 220000,
            'stock' => 5,
            'soldQty' => 0,
            'takeCareDesc' => null,
            'categoryId' => 3,
            'subCategoryId' => 1,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Round Tall Metal Raised Garden Bed',
            'description' => "Birdies beds are made from cold-rolled galvanized steel with an Aluzinc coating, ensuring durability and longevity under all environmental conditions.

            We use a galvanization process three times stronger than most cheaper, copycat competitors on the market. Then, beds are powder-coated with a food-safe, non-toxic paint for a beautiful, long-lasting aesthetic.
            The Birdies Difference
            30\" (76.2cm) Tall: Compared to most metal beds at 12\" (30.48 cm) tall or less, these beds offer improved pest resistance and season extension. They also allow for better soil life, drainage, and root growth.
            
            Easy to Assemble: Put your bed together with nuts, bolts, and washers for an easy no-tool construction, keeping your bed sturdy and safe from bowing.
            
            Lightweight and Strong: Aluzinc galvanized 25-gauge steel is lightweight but strong, lasting four to seven times longer than standard wooden beds.
            
            Rust and Corrosion Resistant: Aluzinc is two to seven times more effective against rust and corrosion than standard galvanized coatings. These will outlast even the highest-quality wooden raised beds with no fading over time.
            
            No Contamination: Unlike low-grade plastic, chemically treated wood, or poorly manufactured copycats, Birdies Aluzinc steel does not leach or break down over time in any significant way, meaning these beds are completely safe to grow food in.",
            'price' => 230000,
            'stock' => 5,
            'soldQty' => 0,
            'takeCareDesc' => null,
            'categoryId' => 3,
            'subCategoryId' => 2,
            'sellerId' => 1,
        ]);

        Product::create([
            'name' => 'Root Pouch Fabric Pot with Handles (5 pack)',
            'description' => "Growers/Gardeners often choose to grow in containers when space for a traditional soil garden is limited or has undesirable traits like little sun or poor soil. Containers also offer an alternative food source for the health and environmentally conscious urbanite with access to a sunny balcony or apartment rooftop. Either way when space is limited and your garden needs to be ‘contained’ it is important to remember that just because space is limited doesn’t mean that your growing options have to be. Root Pouch fabric containers are perfect for the urban/ home grower.",
            'price' => 80000,
            'stock' => 25,
            'soldQty' => 0,
            'takeCareDesc' => null,
            'categoryId' => 3,
            'subCategoryId' => 3,
            'sellerId' => 1,
        ]);

        DB::commit();
    }
}
